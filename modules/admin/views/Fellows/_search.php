<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FellowsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fellows-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'whois') ?>

    <?= $form->field($model, 'research_interests') ?>

    <?= $form->field($model, 'fellowship_period') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'photo_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
