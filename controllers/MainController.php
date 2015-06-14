<?php

namespace app\controllers;

use Yii;

class MainController extends \yii\web\Controller
{
	public $layout='basic';
	public $defaultAction='search';

    public function actionIndex()
    {
    	$hello="Привет МИР!!!";
        return $this->render('index',compact('hello'));
    }

    public function actionSearch($search=null)
    {
    	//$search = Yii::$app->request->post('search');

        return $this->render('search',compact('search'));
    }

}
