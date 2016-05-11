<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchApartment */
/* @var $dataProvider yii\data\ActiveDataProvider */
//$data = $dataProvider;
?>
<div class="apartment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    
    
    <?php
        yii\bootstrap\Modal::begin(['id' =>'modal']);
        yii\bootstrap\Modal::end();
    ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
    
        'striped'=>true,
        'condensed'=>true,
        'showPageSummary'=>true,
        
        
        'panelHeadingTemplate'=>'<div class="pull-right">
            {toolbar}
        </div>
        <h3 class="panel-title">
            Apartment
        </h3>
    ',
        'panel' => [
             'before' => false,
        'after' => false,
            'footer'=>false,

        'type'=>'primary'],
        
        'columns' => [
         
            ['class' => 'kartik\grid\SerialColumn'],

            [
           'attribute'=>'id',
           'format' => 'raw',
           'value'=>function ($data) {
            return Html::a($data->address_id,['service/index','id'=>$data->id]);
                },
            ],
            'apartment_name',
            'member_id',
             [
               'attribute' => 'number',
                'format' => 'integer',
                'pageSummary'=>true
               
            ],
            [
               'attribute' => 'rooms',
                'format' => 'integer',
                'pageSummary'=>true
               
            ],
                    [
           'attribute'=>'address_id',
           'format' => 'raw',
           'value'=>function ($data) {
            return Html::a($data->address_id,['address/view','id'=>$data->address_id],['class' =>'popupModal']);
                },
            ],

          
        ],
    ]); ?>
</div>
<p>
        <?= Html::a(Yii::t('app', 'Create Apartment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

