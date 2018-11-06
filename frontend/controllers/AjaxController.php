<?php

namespace frontend\controllers;

use yii\helpers\Console;
use yii\web\Response;
use yii\web\Controller;
use Yii;
use common\models\Classified;
use common\models\Category;
use common\models\CategoryClassified;
use common\models\Unit;
use yii\data\Pagination;
use common\models\User;

/**
 * Site controller
 */
class AjaxController extends Controller
{
    /**
     * @param $action
     *
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    /**
     *
     */
    public function actionSearchClassified()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();
        if (isset($post['key_word']) && isset($post['exigency']) && isset($post['kind']) && isset($post['price'])) {
            $result = null;
            $result = Classified::find()
                ->joinWith('category')
                ->joinWith('categoryClassified')
                ->joinWith('unit')
                ->where(['=', 'classified.status', 1]);
            if ($post['key_word'] != '') {
                $result->andWhere(['or', ['like', 'classified.title', $post['key_word']], ['like', 'classified.content', $post['key_word']], ['like', 'classified.describe', $post['key_word']]]);

            }
            if ($post['exigency'] != 0) {
                $result->andWhere(['=', 'classified.category_id', $post['exigency']]);
            }
            if ($post['kind'] != 0) {
                $result->andWhere(['=', 'classified.category_classified_id', $post['kind']]);
            }
            if ($post['price'] != '') {
                $price = explode('-', $post['price']);
                if ($price[0] == 0) {
                    $result->andWhere(['or', ['=', 'classified.unit_id', 2], ['and', ['=', 'classified.unit_id', 3], ['>=', 'classified.price', (double)$price[0]], ['<=', 'classified.price', (double)$price[1]]]]);
                }
                if ($price[0] != 0) {
                    $result->andWhere(['=', 'classified.unit_id', 3])->andWhere(['>=', 'classified.price', (double)$price[0]])->andWhere(['<=', 'classified.price', (double)$price[1]]);
                }
            }
            if (($post['key_word'] == '') && ($post['exigency'] == 0) && ($post['kind'] == 0) && ($post['price'] == '')) {
                return $result;
            }
            $pagination = new Pagination([
                'defaultPageSize' => 9,
                'totalCount' => $result->count(),
            ]);
            $search = $result->offset($pagination->offset)->limit($pagination->limit)
                ->orderBy('classified.id DESC')
                ->asArray()->all();
            return [
                'search' => $search,
                'pages' => $pagination,
            ];
        }
        return false;
    }
    public function actionChangePassword()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();
        if (!Yii::$app->user->isGuest) {
            if (isset($post['password_old']) && isset($post['password']) && isset($post['re_password'])) {
                $user = User::findOne(Yii::$app->user->identity->getId());
                if ($user) {
                    if (Yii::$app->security->validatePassword($post['password_old'], $user->password_hash)) {
                        if ($post['password'] == $post['re_password']) {
                            if (strlen($post['password']) >= 6) {
                                $user->setPassword($post['password']);

                                return $user->save();
                            } else { 
                                return 'Mật khẩu mới phải lớn hơn 6 kí tự';
                            }
                        } else {
                            return 'Mật khẩu mới không giống nhau';
                        }
                    } else {
                        return 'Mật khẩu cũ không đúng';
                    }
                }
            }
        }

        return false;
    }


}

