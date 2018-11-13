<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cmodel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cmodel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'manufacturer_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'regno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pic1')->textInput() ?>

    <?= $form->field($model, 'pic2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
