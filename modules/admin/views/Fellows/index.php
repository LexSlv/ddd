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
            'name_en',
            'whois_en',
            'research_interests_en',
            'university_en',
            //'name_ru',
            //'whois_ru',
            //'research_interests_ru',
            //'university_ru',
            //'email:email',
            //'photo_url:url',
            //'fellowship_period',
            //'senior',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
