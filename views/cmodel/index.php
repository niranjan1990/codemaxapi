<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CmodelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cmodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cmodel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cmodel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'manufacturer_id',
            'name',
            'color:ntext',
            'year',
            //'regno',
            //'note',
            //'pic1',
            //'pic2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
