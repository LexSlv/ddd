<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Archive */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="archive-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_en')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'sub_title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_ru')->textInput(['maxlength' => true]) ?>

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
