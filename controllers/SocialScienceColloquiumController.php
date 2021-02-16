<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;


class SocialScienceColloquiumController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $blocksModel = Blocks::find()->all();
        $lang = Yii::$app->language;
        foreach ($blocksModel as $block) {
            if($block['key'] === "social_science_colloquium_inf_block"){
                $blocksArr['social_science_colloquium_inf_block'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "social_science_colloquium_block"){
                $blocksArr['social_science_colloquium_block'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "social_science_colloquium"){
                $blocksArr['social_science_colloquium'] = $block['text_block_'.$lang];
            }
        }

        return $this->render('index', [
            'text_blocks' => $blocksArr
        ]);
    }

}
