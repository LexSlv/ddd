<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fellows */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fellows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fellows-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_en',
            'whois_en',
            'research_interests_en',
            'university_en',
            'name_ru',
            'whois_ru',
            'research_interests_ru',
            'university_ru',
            'email:email',
            'photo_url:url',
            'fellowship_period',
            'senior',
        ],
    ]) ?>

</div>
