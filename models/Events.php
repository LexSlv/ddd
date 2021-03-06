<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $subtitle_ru
 * @property string $title_en
 * @property string $subtitle_en
 * @property string $event_date
 * @property string $author
 * @property int $forthcoming
 * @property int $most_recent
 * @property int $show_in_slider
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru', 'subtitle_ru', 'title_en', 'subtitle_en', 'event_date', 'author_en', 'author_ru', 'description_en', 'description_ru', 'forthcoming', 'most_recent', 'show_in_slider'], 'required'],
            [['forthcoming', 'most_recent', 'show_in_slider', 'show_in_slider_col'], 'integer'],
            [['title_ru', 'subtitle_ru', 'title_en', 'subtitle_en', 'event_date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'subtitle_ru' => 'Subtitle Ru',
            'title_en' => 'Title En',
            'subtitle_en' => 'Subtitle En',
            'event_date' => 'Event Date',
            'author_en' => 'Author EN',
            'author_ru' => 'Author RU',
            'description_en' => 'Description EN',
            'description_ru' => 'Description RU',
            'forthcoming' => 'Forthcoming',
            'most_recent' => 'Most Recent',
            'show_in_slider' => 'Slider Main',
            'show_in_slider_col' => 'Slider colloquium',
        ];
    }
}
