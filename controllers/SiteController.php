<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
use app\models\CreateUser;
use app\models\TK;
use app\models\SD;
use app\models\SMP;
use app\models\UserRole;
// use app\models\Kelola;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
     * @return string
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest)
        {
            return $this->redirect(['site/dashboard']);
        }
        else
        {
            $this->layout = '@app/views/pengunjung/index';
            return $this->render('index');
        }
    }

    public function actionTk()
    {
        //return "tk";
        $this->layout = '@app/views/site/tk';
        return $this->render('tk');
    }


    public function actionSd()
    {
        //return "tk";
        $this->layout = '@app/views/site/sd';
        return $this->render('sd');
    }

    public function actionSmp()
    {
        //return "tk";
        $this->layout = '@app/views/site/smp';
        return $this->render('smp');
    }

    public function actionKeunggulan()
    {
        //return "tk";
        $this->layout = '@app/views/site/keunggulan';
        return $this->render('keunggulan');
    }

    public function actionKomunitas()
    {
        //return "tk";
        $this->layout = '@app/views/site/komunitas';
        return $this->render('komunitas');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionDashboard()
    {

        if (User::isAdmin() || User::isTk() || User::isSd() || User::isSmp()) {
            // $jadwalkuliah = Yii::$app->user->identity->id_dosen;
            $provider = new ActiveDataProvider([
                'query' => \app\models\Sd::find()->all(),
                'pagination' => [
                    'pageSize' => 6
                ],
            ]);
            return $this->render('dashboard', ['provider' => $provider]);
        }
        return $this->redirect('site/login');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAkun()
    {
        // $this->layout = 'main-login';
        $model = new CreateUser();
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
             // User TK
            if ($model->id_user_role == 2)
            {
                $tk = new TK();
                $tk->nama = $model->nama;
                $tk->email = $model->email;
                $tk->telp = $model->telp;
                // $tk->id_kelola = $model->id_kelola;

                $foto = UploadedFile::getInstance($model, 'foto');
                $model->foto = time(). '_' . $foto->name;
                $foto->saveAs(Yii::$app->basePath. '/web/user/' . $model->foto);
                $tk->foto = $model->foto;
                if (!$tk->save())
                {
                    echo 'Error di USER TK<br>';
                    var_dump($tk->errors);
                    die;
                }
        // 2. Save User Role
                $userrole = new UserRole();
                $userrole->nama = $model->nama;
                
        // 4. Save User
                $user = new User();
                $user->id_tk = $tk->id;
                $user->id_user_role = $userrole->id;
                // $user->id_kelola = $tk->id_kelola;
                $user->username = $model->username;
                $user->password = Yii::$app->getSecurity()->generatePasswordHash($model->password);
                $user->id_sd = 0;
                $user->id_smp = 0;
                $user->id_user_role = 2;
                $user->status = 1;
                $user->token = Yii::$app->getSecurity()->generateRandomString(100);
                if (!$user->save())
                {
                    echo 'Error di User TK<br>';
                    var_dump($user->errors);
                    die;
                }

                Yii::$app->session->setFlash('success', 'Berhasil Tambah Akun User TK.');

                return $this->redirect(['tk/index']);
            }

             // ini udah bener id tertentu
            if ($model->id_user_role == 3)
            {
                $sd = new Sd();
                $sd->nama = $model->nama;
                $sd->email = $model->email;
                $sd->telp = $model->telp;
                // $sd->id_kelola = $model->id_kelola;

                $foto = UploadedFile::getInstance($model, 'foto');
                $model->foto = time(). '_' . $foto->name;
                $foto->saveAs(Yii::$app->basePath. '/web/user/' . $model->foto);
                $sd->foto = $model->foto;
                if (!$sd->save())
                {
                    echo 'Error di USER SD<br>';
                    var_dump($sd->errors);
                    die;
                }
        // 2. Save User Role
                $userrole = new UserRole();
                $userrole->nama = $model->nama;
                
        // 4. Save User
                $user = new User();
                $user->id_sd = $sd->id;
                $user->id_user_role = $userrole->id;
                // $user->id_kelola = $sd->id_kelola;
                $user->username = $model->username;
                $user->password = Yii::$app->getSecurity()->generatePasswordHash($model->password);
                $user->id_tk = 0;
                $user->id_smp = 0;
                $user->id_user_role = 3;
                $user->status = 1;
                $user->token = Yii::$app->getSecurity()->generateRandomString(100);
                if (!$user->save())
                {
                    echo 'Error di User SD<br>';
                    var_dump($user->errors);
                    die;
                }

                Yii::$app->session->setFlash('success', 'Berhasil Tambah Akun SD.');

                return $this->redirect(['sd/index']);
            }

             // ini udah bener id tertentu
            if ($model->id_user_role == 4)
            {
                $smp = new smp();
                $smp->nama = $model->nama;
                $smp->email = $model->email;
                $smp->telp = $model->telp;
                // $smp->id_kelola = $model->id_kelola;

                $foto = UploadedFile::getInstance($model, 'foto');
                $model->foto = time(). '_' . $foto->name;
                $foto->saveAs(Yii::$app->basePath. '/web/user/' . $model->foto);
                $smp->foto = $model->foto;
                if (!$smp->save())
                {
                    echo 'Error di USER SMP<br>';
                    var_dump($smp->errors);
                    die;
                }
        // 2. Save User Role
                $userrole = new UserRole();
                $userrole->nama = $model->nama;
                

                // $kelola = new Kelola();
                // $kelola->nama = $model->nama;
                
        // 4. Save User
                $user = new User();
                $user->id_smp = $smp->id;
                $user->id_user_role = $userrole->id;
                // $user->id_kelola = $smp->id_kelola;
                $user->username = $model->username;
                $user->password = Yii::$app->getSecurity()->generatePasswordHash($model->password);
                $user->id_tk = 0;
                $user->id_sd = 0;
                $user->id_user_role = 4;
                $user->status = 1;
                $user->token = Yii::$app->getSecurity()->generateRandomString(100);
                if (!$user->save())
                {
                    echo 'Error di User smp<br>';
                    var_dump($user->errors);
                    die;
                }

                Yii::$app->session->setFlash('success', 'Berhasil Tambah Akun User SMP.');

                return $this->redirect(['smp/index']);
            }
            else {
                return $this->redirect(['site/akun']);
            }
        }
        return $this->render('akun', [
            'model' => $model,
        ]);
    }
}
