<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slider1".
 *
 * @property int $id
 * @property string $image_url
 * @property int $position
 */
class Slider1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_url', 'position'], 'required'],
            [['position'], 'integer'],
            [['image_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_url' => 'Image Url',
            'position' => 'Position',
        ];
    }
}
