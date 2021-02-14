<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fellows */

$this->title = 'Create Fellows';
$this->params['breadcrumbs'][] = ['label' => 'Fellows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fellows-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
