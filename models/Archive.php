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
            [['title', 'sub_title', 'author', 'date_of_publication'], 'required'],
            [['title'], 'string'],
            [['date_of_publication'], 'safe'],
            [['sub_title', 'title','author'], 'string', 'max' => 500],
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
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'author' => 'Author',
            'date_of_publication' => 'Date Of Publication',
            'pdf' => 'pdf'
        ];
    }
}
