<?php

namespace app\controllers;

<<<<<<< HEAD
=======
use app\models\Article;
>>>>>>> origin/master
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
<<<<<<< HEAD
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
=======
    public $layout = 'home';
    function actionIndex(){

        //添加记录
        $article = new Article();
        $article->title = 'aa';
        $article->number = 10;
        $data = $article->insert();
        $data = $article->save();
        $id = $article->attributes['id']; //获取自增ID
        //修改记录
        $article = Article::findOne(2);
        $article->title = 'update title';
        $data = $article->update();
        $data = $article->save();
        //更新单条字段
        $data = Article::updateAllCounters(['num'=>1],['id'=>8]);

        //删除记录
        $article = Article::findOne(2);
        $data = $article->delete();
        $data = Article::deleteAll();
        $data = Article::deleteAll('id=14');
        $data = Article::deleteAll('id=:id',[':id'=>3]);
        dd($data);
    }

    function actionAbout(){

    }


>>>>>>> origin/master
}
