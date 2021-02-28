<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fellows".
 *
 * @property int $id
 * @property string $name_en
 * @property string $whois_en
 * @property string $research_interests_en
 * @property string $university_en
 * @property string $name_ru
 * @property string $whois_ru
 * @property string $research_interests_ru
 * @property string $university_ru
 * @property string $email
 * @property string $photo_url
 * @property string $fellowship_period
 * @property int $senior
 */
class Fellows extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fellows';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_en', 'whois_en', 'research_interests_en', 'university_en', 'name_ru', 'whois_ru', 'research_interests_ru', 'university_ru', 'email', 'photo_url', 'fellowship_period', 'senior'], 'required'],
            [['senior'], 'integer'],
            [['name_en', 'whois_en', 'research_interests_en', 'university_en', 'name_ru', 'whois_ru', 'research_interests_ru', 'university_ru', 'email', 'photo_url', 'fellowship_period'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_en' => 'Name En',
            'whois_en' => 'Whois En',
            'research_interests_en' => 'Research Interests En',
            'university_en' => 'University En',
            'name_ru' => 'Name Ru',
            'whois_ru' => 'Whois Ru',
            'research_interests_ru' => 'Research Interests Ru',
            'university_ru' => 'University Ru',
            'email' => 'Email',
            'photo_url' => 'Photo Url',
            'fellowship_period' => 'Fellowship Period',
            'senior' => 'Senior',
        ];
    }
}
