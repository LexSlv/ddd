<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SignUp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sign-up-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'send_date')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
