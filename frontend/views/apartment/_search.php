<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SearchApartment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apartment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'apartment_name') ?>

    <?= $form->field($model, 'member_id') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'rooms') ?>

    <?php // echo $form->field($model, 'address_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
