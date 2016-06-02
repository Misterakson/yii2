<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex()
    {
        $string = 'Hello world!';
        
        return $this->render('return',['string'=>$string]);
    }
}