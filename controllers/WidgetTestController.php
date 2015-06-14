<?php

namespace app\controllers;

//use Yii;

class WidgetTestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //return Yii::$app->response->sendFile('files/test.txt')->send();
        $search_some="Пример";
        return $this->redirect(
        		[
        			'main/search',
        			'search'=>$search_some
        		]
        	);
    }

}
