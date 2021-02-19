<?php

namespace app\controllers;
use app\models\SignUp;
use app\models\Blocks;
use Yii;

class SubscribeController extends \yii\web\Controller
{
    public function actionIndex()
    {


        $lang = Yii::$app->language;
        $blocksModel = Blocks::find()->all();
        foreach ($blocksModel as $block) {
            $blocksArr[$block['key']] = $block['text_block_'.$lang];
        }

        $email = $_POST['email'];
        $date = date("Y-m-d");

        $customer = new SignUp();
        $customer->email = $email;
        $customer->send_date = $date;
        $customer->save();

        return $this->render('index', [
            'text_blocks' => $blocksArr,
        ]);
    }

}
