<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Login */

$this->title = Yii::t('app', 'Create Login');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Logins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
