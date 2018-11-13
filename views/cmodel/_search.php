<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmodelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cmodel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'manufacturer_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'regno') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'pic1') ?>

    <?php // echo $form->field($model, 'pic2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
