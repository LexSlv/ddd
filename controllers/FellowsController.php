<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;
use app\models\Pages;


class FellowsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blocksModel = Blocks::find()->all();
        $PagesModel = Pages::find()->all();
        $lang = Yii::$app->language;
        foreach ($blocksModel as $block) {
            $blocksArr[$block['key']] = $block['text_block_'.$lang];
        }

        foreach ($PagesModel as $page) {
            $PagesArr[$page['page_name']] = $page['text_'.$lang];
        }

        return $this->render('index', [
            'text_blocks' => $blocksArr,
            'pages' => $PagesArr
        ]);
    }

}
