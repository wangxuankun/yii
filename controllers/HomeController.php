<?php

namespace app\controllers;

use app\models\EntryForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class HomeController extends Controller
{
    public $layout = 'home'; //定义父模板

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $request = \Yii::$app->request;
       // dd($request->get('id',1));
        $user = [
                'age'=>7,
                'class'=>4
        ];

        $data = [
            'ip'=>$request->userIP,
            'username'=>'abc',
            'str'=>'hello world <script>alert(1)</script>'
        ];
        return $this->renderPartial('index',compact('user','data'));

    }


    public function actionAbout(){

        return $this->render('about');
    }
}
