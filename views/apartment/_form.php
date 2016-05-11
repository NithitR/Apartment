<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\helpers\ArrayHelper;
use app\models\Address;

/* @var $this yii\web\View */
/* @var $model app\models\Apartment */
/* @var $form yii\widgets\ActiveForm */
$posts = Address::find()
    ->asArray()
    ->all();
$fullAddress = [];
    foreach($posts as $x){
      
        array_push($fullAddress, $x['plot_house_village'] . ' ' . $x['road'] .' '. $x['district'] .  ' ' . $x['subdistrict'] . ' '. $x['postalcode'] .' '. $x['province']);
//        
    }//end loop
?>

<div class="apartment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'apartment_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_id')->textInput() ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rooms')->textInput(['maxlength' => true]) ?>

       <?=  $form->field($model, 'address_id')->dropDownList($fullAddress);
            ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'CreateAddress'),['address/create'],['class' =>'btn btn-success pull-right']);?>
               
                   
    </div>

    <?php ActiveForm::end(); ?>

</div>
