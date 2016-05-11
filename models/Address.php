<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $id
 * @property string $plot_house_village
 * @property string $road
 * @property string $district
 * @property string $subdistrict
 * @property string $postalcode
 * @property string $province
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plot_house_village', 'road', 'district', 'subdistrict', 'postalcode', 'province'], 'required'],
            [['plot_house_village', 'road', 'district', 'subdistrict', 'province'], 'string', 'max' => 50],
            [['postalcode'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'plot_house_village' => Yii::t('app', 'Plot House Village'),
            'road' => Yii::t('app', 'Road'),
            'district' => Yii::t('app', 'District'),
            'subdistrict' => Yii::t('app', 'Subdistrict'),
            'postalcode' => Yii::t('app', 'Postalcode'),
            'province' => Yii::t('app', 'Province'),
        ];
    }
}
