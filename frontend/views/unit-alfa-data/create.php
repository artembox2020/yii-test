<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UnitAlfaData */

$this->title = 'Create Unit Alfa Data';
$this->params['breadcrumbs'][] = ['label' => 'Unit Alfa Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-alfa-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
