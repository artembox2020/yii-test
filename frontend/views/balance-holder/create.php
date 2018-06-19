<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BalanceHolder */

$this->title = 'Create Balance Holder';
$this->params['breadcrumbs'][] = ['label' => 'Balance Holders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balance-holder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
