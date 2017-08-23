<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Vicaddresses */

$this->title = 'Create Vicaddresses';
$this->params['breadcrumbs'][] = ['label' => 'Vicaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vicaddresses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
