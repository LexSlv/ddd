<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ssc".
 *
 * @property int $id
 * @property int $year
 * @property string $semester
 * @property string $date_of_publication
 * @property int $pdf
 */
class Ssc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ssc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'semester_ru', 'semester_en', 'date_of_publication', 'pdf'], 'required'],
            [['year'], 'integer'],
            [['semester_ru', 'semester_en'], 'string'],
            [['date_of_publication'], 'safe'],
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
            'year' => 'Year',
            'semester_en' => 'Semester EN',
            'semester_ru' => 'Semester RU',
            'date_of_publication' => 'Date Of Publication',
            'pdf' => 'Pdf',
        ];
    }
}
