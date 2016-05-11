<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Service;
/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */
$posts = Service::find()
    ->asArray()
    ->all();
$serviceName = [];
    foreach($posts as $x){
      
        array_push($serviceName, $x['name']);
//        
    }//end loop
?>
 <?php
        yii\bootstrap\Modal::begin(['id' =>'modal2']);
        yii\bootstrap\Modal::end();
    ?>
<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?=  $form->field($model, 'name')->textInput()?>
    

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
