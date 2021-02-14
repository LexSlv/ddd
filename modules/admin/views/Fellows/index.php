<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FellowsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fellows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fellows-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fellows', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'whois',
            'research_interests',
            'fellowship_period',
            //'email:email',
            //'photo_url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
