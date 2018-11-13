<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cmodel */

$this->title = 'Create Cmodel';
$this->params['breadcrumbs'][] = ['label' => 'Cmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cmodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
