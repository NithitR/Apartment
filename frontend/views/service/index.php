<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */




$this->title = Yii::t('app', 'Services');



?>
<div class="service-index">

   

      <?= GridView::widget([
        'dataProvider' => $dataProvider,
    
        'striped'=>true,
        'condensed'=>true,
        'showPageSummary'=>false,
        
        
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

          'id',
          'name',
            [
               'attribute' => 'price',
                'format' => 'integer',
               
               
            ],
                  

          
        ],
    ]); ?>
    
</div>
<p>
        <?= Html::a(Yii::t('app', 'Create Service'), ['create'], ['class' => 'btn btn-success']) ?>
</p>
