<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "archive".
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title
 * @property string $author
 * @property string $date_of_publication
 */
class Archive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'archive';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_en', 'sub_title_en','title_ru', 'sub_title_ru', 'author_ru', 'author_en', 'date_of_publication'], 'required'],
            [['title_en', 'sub_title_en','title_ru', 'sub_title_ru', 'author_ru', 'author_en',], 'string'],
            [['date_of_publication'], 'safe'],
            [['title_en', 'sub_title_en','title_ru', 'sub_title_ru', 'author_ru', 'author_en'], 'string', 'max' => 500],
            [['pdf'], 'file']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title RU',
            'title_en' => 'Title EN',
            'sub_title_ru' => 'Sub Title RU',
            'sub_title_en' => 'Sub Title EN',
            'author_en' => 'Author EN',
            'author_ru' => 'Author RU',
            'date_of_publication' => 'Date Of Publication',
            'pdf' => 'pdf'
        ];
    }
}
