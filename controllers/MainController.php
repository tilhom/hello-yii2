<?php

namespace app\controllers;

use Yii;
use app\models\RegForm;
use app\models\LoginForm;

class MainController extends \yii\web\Controller
{
	public $layout='basic';
	public $defaultAction='search';

    public function actionIndex()
    {
    	$hello="Привет МИР!!!";
        return $this->render('index',compact('hello'));
    }

    public function actionReg()
    {
        $model=new RegForm;
        if (Yii::$app->request->post()) {
            echo "<pre>";
            print_r(Yii::$app->request->post());
            echo "</pre>";
            Yii::$app->end();
        }
        return $this->render('reg', compact('model'));
    }

     public function actionLogin()
    {
        $model=new LoginForm;
        if (Yii::$app->request->post()) {
            echo "<pre>";
            print_r(Yii::$app->request->post());
            echo "</pre>";
            Yii::$app->end();
        }
        return $this->render('login', compact('model'));
    }

    public function actionSearch($search=null)
    {
    	//$search = Yii::$app->request->post('search');

        return $this->render('search',compact('search'));
    }

}
