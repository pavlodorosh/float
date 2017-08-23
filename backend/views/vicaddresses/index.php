<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\VicaddressesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vicaddresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vicaddresses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vicaddresses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
