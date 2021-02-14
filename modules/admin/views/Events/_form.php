<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle_en')->textInput(['maxlength' => true]) ?>


    <?php
    echo '<label>event_date</label>';
    echo DatePicker::widget([
    'name' => 'event_datee',
    'value' => date('d-M-Y', strtotime('+2 days')),
    'options' => ['placeholder' => 'Select issue date ...'],
    'pluginOptions' => [
    'format' => 'dd-M-yyyy',
    'todayHighlight' => true
    ]
    ]);
    ?>

    <br>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forthcoming')->checkbox() ?>

    <?= $form->field($model, 'most_recent')->checkbox() ?>

    <?= $form->field($model, 'show_in_slider')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
