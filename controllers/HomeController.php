<?php

namespace app\controllers;
use app\models\Article;
use app\models\Category;
use yii\web\Controller;

class HomeController extends Controller
{
    public $layout = 'home'; //定义父模板

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

        $articles = Article::find()->with('category')->asArray()->all();
        dd($articles);
    }


}
