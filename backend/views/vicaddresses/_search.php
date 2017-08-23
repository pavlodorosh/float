<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VicaddressesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vicaddresses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'FLAT_TYPE') ?>

    <?= $form->field($model, 'FLAT_NUMBER') ?>

    <?= $form->field($model, 'NUMBER_FIRST') ?>

    <?= $form->field($model, 'NUMBER_FIRST_PREFIX') ?>

    <?php // echo $form->field($model, 'NUMBER_FIRST_SUFFIX') ?>

    <?php // echo $form->field($model, 'NUMBER_LAST') ?>

    <?php // echo $form->field($model, 'NUMBER_LAST_PREFIX') ?>

    <?php // echo $form->field($model, 'NUMBER_LAST_SUFFIX') ?>

    <?php // echo $form->field($model, 'STREET_NAME') ?>

    <?php // echo $form->field($model, 'STREET_TYPE_CODE') ?>

    <?php // echo $form->field($model, 'LOCALITY_NAME') ?>

    <?php // echo $form->field($model, 'POSTCODE') ?>

    <?php // echo $form->field($model, 'LATITUDE') ?>

    <?php // echo $form->field($model, 'LONGITUDE') ?>

    <?php // echo $form->field($model, 'LEGAL_PARCEL_ID') ?>

    <?php // echo $form->field($model, 'ADDRESS_DETAIL_PID') ?>

    <?php // echo $form->field($model, 'STREET_LOCALITY_PID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
