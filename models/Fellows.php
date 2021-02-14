<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fellows".
 *
 * @property int $id
 * @property string $name
 * @property string $whois
 * @property string $research_interests
 * @property string $fellowship_period
 * @property string $email
 * @property string $photo_url
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
            [['name', 'whois', 'research_interests', 'fellowship_period', 'email', 'photo_url'], 'required'],
            [['name', 'whois', 'fellowship_period', 'email', 'photo_url'], 'string', 'max' => 255],
            [['research_interests'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'whois' => 'Whois',
            'research_interests' => 'Research Interests',
            'fellowship_period' => 'Fellowship Period',
            'email' => 'Email',
            'photo_url' => 'Photo Url',
        ];
    }
}
