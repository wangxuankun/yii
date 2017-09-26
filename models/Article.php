<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public function getCategory(){
        $articles = $this->hasOne(Category::className(),['id'=>'cate_id']);
        return $articles;
    }
}
