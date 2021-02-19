<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;
use app\models\Pages;
use app\models\Archive;

class OccasionalPapersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blocksModel = Blocks::find()->all();
        $PagesModel = Pages::find()->all();
        $pdfs = Archive::find()->orderBy(['date_of_publication' => SORT_DESC])->all();
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
            'pdfs' => $pdfs
        ]);

    }

}
