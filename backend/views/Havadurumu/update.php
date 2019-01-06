<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Havadurumu */

$this->title = 'Update Havadurumu: ' . $model->illerid;
$this->params['breadcrumbs'][] = ['label' => 'Havadurumus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->illerid, 'url' => ['view', 'id' => $model->illerid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="havadurumu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
