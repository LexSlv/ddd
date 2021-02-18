<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;


class FellowsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blocksModel = Blocks::find()->all();
        $lang = Yii::$app->language;
        foreach ($blocksModel as $block) {
            if($block['key'] === "DKU_fellows"){
                $blocksArr['DKU_fellows'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "fellows_block_1"){
                $blocksArr['fellows_block_1'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "fellows_block_2"){
                $blocksArr['fellows_block_2'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "dku_senior_fellows"){
                $blocksArr['dku_senior_fellows'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "dku_junior_fellows"){
                $blocksArr['dku_junior_fellows'] = $block['text_block_'.$lang];
            }
        }

        return $this->render('index', [
            'text_blocks' => $blocksArr
        ]);
    }

}
