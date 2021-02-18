<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;
use app\models\Events;

class AcademicImprovementController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $blocksModel = Blocks::find()->all();
        $lang = Yii::$app->language;
        foreach ($blocksModel as $block) {
            $blocksArr[$block['key']] = $block['text_block_'.$lang];
        }

        $f_events = Events::find()->where(['forthcoming' => 1])->all();
        $m_events = Events::find()->where(['most_recent' => 1])->all();

        return $this->render('index', [
            'text_blocks' => $blocksArr,
            'f_events' => $f_events,
            'm_events' => $m_events
        ]);
    }

}
