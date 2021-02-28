<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fellows */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fellows-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <hr>

    <?= $form->field($model, 'whois_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'whois_ru')->textInput(['maxlength' => true]) ?>

    <hr>

    <?= $form->field($model, 'research_interests_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'research_interests_ru')->textInput(['maxlength' => true]) ?>

    <hr>

    <?= $form->field($model, 'university_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'university_ru')->textInput(['maxlength' => true]) ?>

    <hr>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fellowship_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senior')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
