<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "serviceApartment".
 *
 * @property integer $service_id
 * @property integer $apartment_id
 */
class ServiceApartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'serviceApartment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_id', 'apartment_id'], 'required'],
            [['service_id', 'apartment_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_id' => Yii::t('app', 'Service ID'),
            'apartment_id' => Yii::t('app', 'Apartment ID'),
        ];
    }
}
