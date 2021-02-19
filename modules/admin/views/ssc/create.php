<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ssc */

$this->title = 'Create Ssc';
$this->params['breadcrumbs'][] = ['label' => 'Sscs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ssc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
