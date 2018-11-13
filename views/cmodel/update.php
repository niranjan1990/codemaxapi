<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cmodel */

$this->title = 'Update Cmodel: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cmodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
