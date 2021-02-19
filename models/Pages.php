<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $page_name
 * @property string $text_ru
 * @property string $text_en
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_name', 'text_ru', 'text_en'], 'required'],
            [['page_name', 'text_ru', 'text_en'], 'string'],
            [['page_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_name' => 'Page Name',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
        ];
    }
}
