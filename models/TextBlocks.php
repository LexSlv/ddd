<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "text_blocks".
 *
 * @property int $id
 * @property string $key
 * @property string $text_block_ru
 * @property string $text_block_en
 */
class TextBlocks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'text_blocks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'text_block_ru', 'text_block_en'], 'required'],
            [['text_block_ru', 'text_block_en'], 'string'],
            [['key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'text_block_ru' => 'Text Block Ru',
            'text_block_en' => 'Text Block En',
        ];
    }
}
