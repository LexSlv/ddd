<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;
use app\models\Pages;
use app\models\Fellows;
use app\models\Slider2;


class FellowsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blocksModel = Blocks::find()->all();
        $PagesModel = Pages::find()->all();
        $slider = Slider2::find()->all();

        $s_fellows = Fellows::find()->where(['senior' => 1])->all();
        $j_fellows = Fellows::find()->where(['senior' => 0])->all();

        $lang = Yii::$app->language;
        foreach ($blocksModel as $block) {
            $blocksArr[$block['key']] = $block['text_block_'.$lang];
        }

        foreach ($PagesModel as $page) {
            $PagesArr[$page['page_name']] = $page['text_'.$lang];
        }

        return $this->render('index', [
            'text_blocks' => $blocksArr,
            'pages' => $PagesArr,
            's_fellows' => $s_fellows,
            'j_fellows' => $j_fellows,
            'slider' => $slider
        ]);
    }

}
