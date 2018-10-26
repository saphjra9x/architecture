<?php

namespace frontend\controllers;

use common\models\Classified;
use Yii;
use yii\base\InvalidParamException;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\helpers\FunctionHelper;
use common\models\Product;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Image;

/**
 * Site controller
 */
class MobileSiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'main_mobile';
        return $this->render('index');
    }

    /**
     * @param $ct
     * @param $category_id
     *
     * @return array
     */
    protected function search($ct, $category_id)
    {
        $query = null;
        if ($ct) {
            $query = Product::find();

            $ct = explode(',', $ct);

            foreach ($ct as $key => $value) {
                $query->orWhere(['category_id' => $value]);
            }
        } else {

            $fun = new FunctionHelper;
            $categories_id = $fun->get_all_categories_id_children(FunctionHelper::get_categories(), $category_id);

            $query = Product::find()->orWhere(['category_id' => $category_id]);
            foreach ($categories_id as $key => $value) {
                $query->orWhere(['category_id' => $value]);
            }
        }

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $query->count(),
        ]);

        $search = $query->offset($pagination->offset)->limit($pagination->limit)
            ->orderBy('product.id DESC')
            ->orderBy('product.featured DESC')
            ->asArray()->all();

        return [
            'search' => $search,
            'pages' => $pagination,
            'ct' => $ct
        ];

    }

    /**
     * @param null $category_slug
     * @param null $content_slug
     * @param null $ct
     *
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionView($category_slug = null, $content_slug = null, $ct = null)
    {
        $this->layout = 'main_mobile';
        $category = FunctionHelper::get_category_by_slug($category_slug);

        if (!$category) {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }

        $post = FunctionHelper::get_post_by_slug($content_slug);

        $page = '';
        $classified = FunctionHelper::get_classified_by_slug($content_slug);
        $search = $this->search($ct, $category['id']);
        switch ($category['page']['key']) {
            case 'news-page':
                if (!$post && $content_slug) {
                    throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
                }

                $page = !$post ? 'news-page' : 'detail-news-page';
                break;
            case 'news-childrent':
                if (!$post && $content_slug) {
                    throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
                }

                $page = !$post ? 'news-childrent-page' : 'detail-news-page';
                break;
            case 'classified-page':
                if (!$classified && $content_slug) {
                    throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
                }
                $page = !$classified ? 'classified-page' : 'detail-classified-page';
                break;
            case 'single-page':
                $page = 'single-page';
                break;
            case 'postnews':
                $page = 'postnews';
                break;
            case 'posting-page':
                $page = 'posting-page';
                break;
            case 'project-page':
                break;
            case 'ad-page':
                break;
            case 'contact-page':
                $page = 'contact-page';
                break;
            case 'product-page':
                if (!$post && $content_slug) {
                    throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
                }
                $page = !$post ? 'product-page' : 'detail-product-page';
                break;
            case 'pricing-page':
                $page = 'pricing-page';
                break;
            default;
                return $this->redirect(['mobile-site/index']);
                break;
        }

        return $this->render($page, [
            'category' => $category,
            'post' => $post,
            'classified' => $classified,
            'products' => $search['search'],
            'pages' => $search['pages'],
        ]);
    }

    /**
     *
     */
    public function actionRegister()
    {
        $this->layout = 'main_mobile';
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
        return $this->render('register', [
            'model' => $model,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $this->layout = 'main_mobile';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact-page', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $this->layout = 'signup';
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     *
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionPostNews()
    {
        $this->layout = 'main_mobile';
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

                return $this->redirect(['index']);

            }
        }
        return $this->render('postnews',
            [
                'model' => $model
            ]);
    }

    public function actionMySearch($key_word, $exigency, $kind, $project, $price)
    {
        $this->layout = 'main_mobile';
        if (isset($key_word) && isset($exigency) && isset($kind) && isset($project) && isset($price)) {
            $result = Classified::find()->joinWith('category')->where(['classified.status' => 1]);
            if ($key_word != '') {
                $result->andWhere(['or', ['like', 'classified.title', $key_word], ['like', 'classified.content', $key_word], ['like', 'classified.describe', $key_word]]);

            }
            if ($exigency != 0) {
                $result->andWhere(['=', 'classified.exigency_id', $exigency]);
            }
            if ($kind != 0) {
                $result->andWhere(['=', 'classified.category_classified_id', $kind]);
            }
            if ($project != 0) {
                $result->andWhere(['=', 'classified.project_id', $project]);
            }
            if ($price != '') {
                $price1 = explode('-', $price);
                if ($price1[0] == 0) {
                    $result->andWhere(['or', ['=', 'classified.unit_id', 2], ['and', ['=', 'classified.unit_id', 3], ['>=', 'classified.price', (double)$price1[0]], ['<=', 'classified.price', (double)$price1[1]]]]);
                }
                if ($price1[0] != 0) {
                    $result->andWhere(['=', 'classified.unit_id', 3])->andWhere(['>=', 'classified.price', (double)$price1[0]])->andWhere(['<=', 'classified.price', (double)$price1[1]]);
                }
            }

            $pagination = new Pagination([
                'defaultPageSize' => 9,
                'totalCount' => $result->count(),
            ]);
            $search = $result->offset($pagination->offset)->limit($pagination->limit)
                ->orderBy('classified.id DESC')
                ->asArray()->all();
            return $this->render('search', [
                'search' => $search,
                'pages' => $pagination,
            ]);
        }
        return false;
    }
}
