<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slider1 */

$this->title = 'Create Slider1';
$this->params['breadcrumbs'][] = ['label' => 'Slider1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
