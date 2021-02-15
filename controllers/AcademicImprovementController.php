<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;

class AcademicImprovementController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $blocksModel = Blocks::find()->all();
        $lang = Yii::$app->language;
        foreach ($blocksModel as $block) {
            if($block['key'] === "academic_improvement_title"){
                $blocksArr['academic_improvement_title'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "forthcoming_events"){
                $blocksArr['forthcoming_events'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "most_recent_events"){
                $blocksArr['most_recent_events'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "academic_improvement_block"){
                $blocksArr['academic_improvement_block'] = $block['text_block_'.$lang];
            }

            if($block['key'] === "academic_improvement_pdf"){
                $blocksArr['academic_improvement_pdf'] = $block['text_block_'.$lang];
            }

        }

        return $this->render('index', [
            'text_blocks' => $blocksArr
        ]);
    }

}
