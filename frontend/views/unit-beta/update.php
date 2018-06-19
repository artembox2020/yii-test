<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnitBeta */

$this->title = 'Update Unit Beta: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Unit Betas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unit-beta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
