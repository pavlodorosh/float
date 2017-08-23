<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Vicaddresses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vicaddresses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FLAT_TYPE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLAT_NUMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMBER_FIRST')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMBER_FIRST_PREFIX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMBER_FIRST_SUFFIX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMBER_LAST')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMBER_LAST_PREFIX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMBER_LAST_SUFFIX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STREET_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STREET_TYPE_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOCALITY_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'POSTCODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LATITUDE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LONGITUDE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEGAL_PARCEL_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ADDRESS_DETAIL_PID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STREET_LOCALITY_PID')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
