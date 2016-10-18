<?php

namespace app\controllers;

use Yii;
use app\models\Login;


class LoginganController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
