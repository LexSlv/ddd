<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meta".
 *
 * @property string $action_name
 * @property string $page_title_ru
 * @property string $page_title_en
 */
class Meta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['action_name', 'page_title_ru', 'page_title_en'], 'required'],
            [['action_name', 'page_title_ru', 'page_title_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'action_name' => 'Action Name',
            'page_title_ru' => 'Page Title Ru',
            'page_title_en' => 'Page Title En',
        ];
    }
}
