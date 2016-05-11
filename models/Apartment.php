<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apartment".
 *
 * @property integer $id
 * @property string $apartment_name
 * @property integer $member_id
 * @property string $number
 * @property string $rooms
 * @property integer $address_id
 */
class Apartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apartment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['apartment_name', 'member_id', 'number', 'rooms', 'address_id'], 'required'],
            [['member_id', 'address_id'], 'integer'],
            [['apartment_name'], 'string', 'max' => 50],
            [['number'], 'string', 'max' => 10],
            [['rooms'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'apartment_name' => Yii::t('app', 'Apartment Name'),
            'member_id' => Yii::t('app', 'Member ID'),
            'number' => Yii::t('app', 'Number'),
            'rooms' => Yii::t('app', 'Rooms'),
            'address_id' => Yii::t('app', 'Address ID'),
        ];
    }
}
