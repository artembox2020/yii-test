<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UnitBetaData */

$this->title = 'Create Unit Beta Data';
$this->params['breadcrumbs'][] = ['label' => 'Unit Beta Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-beta-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
