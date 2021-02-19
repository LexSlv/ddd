<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sign_up".
 *
 * @property int $id
 * @property string $send_date
 * @property string $email
 */
class SignUp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sign_up';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['send_date', 'email'], 'required'],
            [['send_date'], 'safe'],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'send_date' => 'Send Date',
            'email' => 'email',
        ];
    }
}
