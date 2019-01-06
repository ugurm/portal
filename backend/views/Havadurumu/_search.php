<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HavadurumuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="havadurumu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'illerid') ?>

    <?= $form->field($model, 'servisid') ?>

    <?= $form->field($model, 'imgid') ?>

    <?= $form->field($model, 'favid') ?>

    <?= $form->field($model, 'olcekc') ?>

    <?php // echo $form->field($model, 'roleid') ?>

    <?php // echo $form->field($model, 'olcekf') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
