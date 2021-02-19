<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;

class ContactsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blocksModel = Blocks::find()->all();
        $lang = Yii::$app->language;
        foreach ($blocksModel as $block) {
            $blocksArr[$block['key']] = $block['text_block_'.$lang];
        }

        return $this->render('index', [
            'text_blocks' => $blocksArr,
        ]);
    }

}
