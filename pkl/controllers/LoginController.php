<?php

namespace app\controllers;

class LoginController extends \yii\web\Controller
{
    public function actionView($id)
    if ($model === null){
    	throw new notfound;
    }
        return $this->render('view', ['model' => $model]);
}
?>
