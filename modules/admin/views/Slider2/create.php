<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slider2 */

$this->title = 'Create Slider2';
$this->params['breadcrumbs'][] = ['label' => 'Slider2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
