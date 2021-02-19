<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fellows */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fellows-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'whois')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'research_interests')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fellowship_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_url')->textInput(['maxlength' => true]) ?>

    <br>
    <small>По умолчанию junior</small>
    <br>
    <?= $form->field($model, 'senior')->checkbox() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
