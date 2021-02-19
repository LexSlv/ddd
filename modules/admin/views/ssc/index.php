<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SscSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sscs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ssc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ssc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'year',
            'semester:ntext',
            'date_of_publication',
            'pdf',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
