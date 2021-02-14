<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_en
 * @property string $link_ru
 * @property string $link_en
 * @property int $position
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_ru', 'name_en', 'link_ru', 'link_en', 'position'], 'required'],
            [['position'], 'integer'],
            [['name_ru', 'name_en', 'link_ru', 'link_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'link_ru' => 'Link Ru',
            'link_en' => 'Link En',
            'position' => 'Position',
        ];
    }
}
