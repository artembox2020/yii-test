<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Compnay */

$this->title = 'Create Compnay';
$this->params['breadcrumbs'][] = ['label' => 'Compnays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compnay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
