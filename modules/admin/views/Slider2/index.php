<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Slider2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slider2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Slider2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'image_url:url',
            'position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
