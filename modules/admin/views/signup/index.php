<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SignUpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sign Ups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sign-up-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sign Up', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'send_date',
            'email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
