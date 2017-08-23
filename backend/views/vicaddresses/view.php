<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Vicaddresses */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vicaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vicaddresses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'FLAT_TYPE',
            'FLAT_NUMBER',
            'NUMBER_FIRST',
            'NUMBER_FIRST_PREFIX',
            'NUMBER_FIRST_SUFFIX',
            'NUMBER_LAST',
            'NUMBER_LAST_PREFIX',
            'NUMBER_LAST_SUFFIX',
            'STREET_NAME',
            'STREET_TYPE_CODE',
            'LOCALITY_NAME',
            'POSTCODE',
            'LATITUDE',
            'LONGITUDE',
            'LEGAL_PARCEL_ID',
            'ADDRESS_DETAIL_PID',
            'STREET_LOCALITY_PID',
        ],
    ]) ?>

</div>
