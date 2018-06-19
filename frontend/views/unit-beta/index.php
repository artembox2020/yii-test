<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnitBetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unit Betas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-beta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unit Beta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sn',
            'device_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
