<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchApartment */
/* @var $dataProvider yii\data\ActiveDataProvider */
//$data = $dataProvider;
?>
<div class="apartment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Apartment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?php
        yii\bootstrap\Modal::begin(['id' =>'modal']);
        yii\bootstrap\Modal::end();
    ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'apartment_name',
            'member_id',
            'number',
            'rooms',
           [
           'attribute'=>'address_id',
           'format' => 'raw',
           'value'=>function ($data) {
            return Html::a($data->address_id,['site/index','id'=>$data->id],['class' =>'popupModal']);
                },
            ],

          
        ],
    ]); ?>
</div>
