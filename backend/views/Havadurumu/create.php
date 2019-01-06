<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Havadurumu */

$this->title = 'Create Havadurumu';
$this->params['breadcrumbs'][] = ['label' => 'Havadurumus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="havadurumu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
