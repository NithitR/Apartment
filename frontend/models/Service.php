<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $language
 * @property string $name
 * @property double $price
 * @property string $type
 * @property string $status
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'name', 'price', 'type', 'status'], 'required'],
            [['price'], 'number'],
            [['language', 'status'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'language' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
