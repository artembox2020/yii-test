<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UnitAlfa */

$this->title = 'Create Unit Alfa';
$this->params['breadcrumbs'][] = ['label' => 'Unit Alfas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-alfa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
