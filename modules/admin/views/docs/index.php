<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Docs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Docs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'attribute' => 'doc',
                'format' => 'html',
                'label' => 'doc',
                'value' => function ($data) {
                    return '<a href="'.$data['doc'].'">'.$data['doc'].'</a>';
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
