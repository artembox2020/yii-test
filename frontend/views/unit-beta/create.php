<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UnitBeta */

$this->title = 'Create Unit Beta';
$this->params['breadcrumbs'][] = ['label' => 'Unit Betas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-beta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
