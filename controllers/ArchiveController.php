<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;
use app\models\Archive;

class ArchiveController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blocksModel = Blocks::find()->all();
        $pdfs = Archive::find()->orderBy(['date_of_publication' => SORT_DESC])->all();
        $lang = Yii::$app->language;
        foreach ($blocksModel as $block) {
            $blocksArr[$block['key']] = $block['text_block_'.$lang];
        }

        return $this->render('index', [
            'text_blocks' => $blocksArr,
            'pdfs' => $pdfs
        ]);
        return $this->render('index');
    }

}
