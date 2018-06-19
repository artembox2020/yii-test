<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnitAlfaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unit Alfas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-alfa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unit Alfa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'serial_number',
            'device_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
