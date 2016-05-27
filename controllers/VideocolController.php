<?php

/* 
 * 视频合集类
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\controllers;

use yii\web\Controller;
class VideocolController extends Controller {
    
    public $enableCsrfValidation = false;
    public  $layout = 'layout';  //自定义皮肤
    public function actionIndex(){
        
        return $this->render('index');
//        echo "你好!";
//        exit;
    }
}
