<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ssc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ssc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'semester')->textInput() ?>

    <?= $form->field($model, 'date_of_publication')->textInput([
        'maxlength' => true,
        'placeholder' => "2020-01-01 - вводить в таком формате!"
    ]) ?>


    <?= $form->field($model, 'pdf')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
