<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnitBetaData */

$this->title = 'Update Unit Beta Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Unit Beta Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unit-beta-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
