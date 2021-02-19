<?php

namespace app\controllers;
use Yii;
use app\models\Blocks;
use app\models\Events;
use app\models\Pages;

class AcademicImprovementController extends \yii\web\Controller
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

        $f_events = Events::find()->where(['forthcoming' => 1])->orderBy(['event_date' => SORT_DESC])->all();
        $m_events = Events::find()->where(['most_recent' => 1])->orderBy(['event_date' => SORT_DESC])->all();

        return $this->render('index', [
            'text_blocks' => $blocksArr,
            'f_events' => $f_events,
            'm_events' => $m_events,
            'pages' => $PagesArr
        ]);

    }

}
