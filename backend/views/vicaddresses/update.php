<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vicaddresses */

$this->title = 'Update Vicaddresses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vicaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vicaddresses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
