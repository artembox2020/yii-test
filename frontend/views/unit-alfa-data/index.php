<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnitAlfaDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unit Alfa Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-alfa-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unit Alfa Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sn',
            'unit_alfa_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
