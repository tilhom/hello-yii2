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
        if ($model->load(Yii::$app->request->post())&&$model->validate()):
           
            if($model->reg()):
                $this->goHome();
            else:
                Yii::$app->session->setFlash('error','Возникла ошибка при регистрации');
                Yii::error('Ошибка при регистрации');
                return $this->refresh();
            endif;
            
        endif;
        return $this->render('reg', compact('model'));
    }

     public function actionLogin()
    {
        $model=new LoginForm;
        if ($model->load(Yii::$app->request->post())&& $model->login()):
            return $this->goBack();
            endif;
        return $this->render('login', compact('model'));
    }

    public function actionSearch($search=null)
    {
    	//$search = Yii::$app->request->post('search');

        return $this->render('search',compact('search'));
    }

}
