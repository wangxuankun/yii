<<<<<<< HEAD
<?php
/**
 * Created by PhpStorm.
 * User: kun
 * Date: 17-7-17
 * Time: 下午7:04
 */

function p($data){
    echo "<pre>";
    print_r($data);
    exit;
}

function dd($data){
    echo "<pre>";
    var_dump($data);
    exit;
=======
<?php
/**
 * User: wangxuankun
 * Date: 2017/7/17
 * Time: 21:29
 * Desc:
 */

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
>>>>>>> origin/master
}