<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HavadurumuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Havadurumus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="havadurumu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Havadurumu', ['create'], ['class' => 'btn btn-success']) ?>
		
    </p>
	
	
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
		//print_r($dataProvider),
		//print_r("deneme"),
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'illerid',
            'servisid',
            'imgid',
            'favid',
            'olcekc',
            'roleid',
            'olcekf',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
