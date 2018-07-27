<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NamesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="names-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'a') ?>

    <?= $form->field($model, 'b') ?>

    <?= $form->field($model, 'c') ?>

    <?= $form->field($model, 'd') ?>

    <?= $form->field($model, 'asd') ?>

    <?php // echo $form->field($model, 'ng') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
