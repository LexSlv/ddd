<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use dosamigos\tinymce\TinyMce;


/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle_ru')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'event_date')->textInput([
            'maxlength' => true,
            'placeholder' => "2020-01-01 - вводить в таком формате!"
    ]) ?>


    <!--
    <?php

    echo DatePicker::widget([
        'name' => 'event_date',
        'value' => date('Y-m-d'),
        'options' => ['placeholder' => 'Select issue date ...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);

    ?>
    -->

    <?= $form->field($model, 'author_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_ru')->textInput(['maxlength' => true]) ?>

    <!--
    <?= $form->field($model, 'description_en')->textarea() ?>

    <?= $form->field($model, 'description_ru')->textarea() ?>
    -->

    <?= $form->field($model, 'description_en')->widget(TinyMce::className(), [
        'options' => ['rows' => 20],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste",
                "image"

            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>


    <?= $form->field($model, 'description_ru')->widget(TinyMce::className(), [
        'options' => ['rows' => 20],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste",
                "image"

            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>



    <?= $form->field($model, 'forthcoming')->checkbox() ?>

    <?= $form->field($model, 'most_recent')->checkbox() ?>

    <?= $form->field($model, 'show_in_slider')->checkbox() ?>

    <?= $form->field($model, 'show_in_slider_col')->checkbox() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
