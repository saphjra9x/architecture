<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Tab;
use common\models\Image;
use common\models\SeoTool;
use common\models\Classified;
use common\helpers\FunctionHelper;
use common\models\Category;
use backend\controllers\base\AdminController;

/**
 * ClassifiedController implements the CRUD actions for Classified model.
 */
class ClassifiedController extends AdminController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Classified models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Classified::find()->where(['classified.status' => 1])->joinWith('category');

        $pagination = new Pagination([
            'defaultPageSize' => 50,
            'totalCount' => $query->count(),
        ]);

        $classifieds = $query->orderBy('id DESC')->all();

        return $this->render('index', [
            'classifieds' => $classifieds,
            'pages' => $pagination
        ]);
    }

    public function actionWaitIndex()
    {
        $query = Classified::find()->where(['classified.status' => 0])->joinWith('category');

        $pagination = new Pagination([
            'defaultPageSize' => 50,
            'totalCount' => $query->count(),
        ]);

        $classifieds = $query->where(['classified.status' => 0])->orderBy('id DESC')->all();

        return $this->render('wait-index', [
            'classifieds' => $classifieds,
            'pages' => $pagination
        ]);
    }

    public function actionWaitCreate()
    {
        $model = new Classified();

        if ($model->load(Yii::$app->request->post())) {


            if ($model->save()) {
                if ($model->images) {
                    foreach (json_decode($model->images) as $key => $value) {
                        $image = new Image();
                        $image->avatar = $value;
                        $image->classified_id = $model->id;
                        $image->save();
                    }
                }

                $model->slug = FunctionHelper::slug($model->title) . '-' . $model->id;
                $model->save();
                return $this->redirect(['wait-index']);
            }
        }

        return $this->render('wait-create', [
            'model' => $model,
        ]);
    }

    public function actionWaitUpdate($id)
    {
        $model = $this->findModel($id);
        $images = Image::find()->where(['=', 'classified_id', $id])->all();

        if ($model->load(Yii::$app->request->post())) {

            $model->slug = FunctionHelper::slug($model->title) . '-' . $model->id;
            if ($model->save()) {
                return $this->redirect(['wait-index']);
            }
        }

        return $this->render('wait-update', [
            'model' => $model,
            'images' => $images
        ]);
    }

    public function actionWaitDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['wait-index']);
    }

    /**
     * @param $id
     *
     * @return string
     */
    public function actionTab($id)
    {

        $tabs = Tab::find()->where(['classified_id' => $id])->all();
        $classified = Classified::findOne($id);

        return $this->render('tab', [
            'classified' => $classified,
            'tabs' => $tabs
        ]);
    }

    /**
     * Displays a single Classified model.
     *
     * @param integer $id
     *
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Classified model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Classified();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                if ($model->images) {
                    foreach (json_decode($model->images) as $key => $value) {
                        $image = new Image();
                        $image->avatar = $value;
                        $image->classified_id = $model->id;
                        $image->title = FunctionHelper::slug($value);
                        $image->save();
                    }
                }

                $model->slug = FunctionHelper::slug($model->title) . '-' . $model->id;
                $model->save();
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Classified model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id
     *
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $images = Image::find()->where(['=', 'classified_id', $id])->all();

        if ($model->load(Yii::$app->request->post())) {

            $model->slug = FunctionHelper::slug($model->title) . '-' . $model->id;
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'images' => $images
        ]);
    }

    /**
     * Deletes an existing Classified model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param integer $id
     *
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Classified model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     *
     * @return Classified the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Classified::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('backend', 'The requested page does not exist.'));
    }
}
