<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Names */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="names-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b')->textInput() ?>

    <?= $form->field($model, 'c')->textInput() ?>

    <?= $form->field($model, 'd')->textInput() ?>

    <?= $form->field($model, 'asd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ng')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
