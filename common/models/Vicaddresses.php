<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vic_addresses".
 *
 * @property integer $id
 * @property string $FLAT_TYPE
 * @property string $FLAT_NUMBER
 * @property string $NUMBER_FIRST
 * @property string $NUMBER_FIRST_PREFIX
 * @property string $NUMBER_FIRST_SUFFIX
 * @property string $NUMBER_LAST
 * @property string $NUMBER_LAST_PREFIX
 * @property string $NUMBER_LAST_SUFFIX
 * @property string $STREET_NAME
 * @property string $STREET_TYPE_CODE
 * @property string $LOCALITY_NAME
 * @property string $POSTCODE
 * @property string $LATITUDE
 * @property string $LONGITUDE
 * @property string $LEGAL_PARCEL_ID
 * @property string $ADDRESS_DETAIL_PID
 * @property string $STREET_LOCALITY_PID
 */
class Vicaddresses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vic_addresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FLAT_NUMBER', 'NUMBER_FIRST', 'NUMBER_LAST', 'LATITUDE', 'LONGITUDE'], 'number'],
            [['STREET_NAME', 'LOCALITY_NAME', 'ADDRESS_DETAIL_PID'], 'required'],
            [['FLAT_TYPE'], 'string', 'max' => 50],
            [['NUMBER_FIRST_PREFIX', 'NUMBER_LAST_PREFIX'], 'string', 'max' => 3],
            [['NUMBER_FIRST_SUFFIX', 'NUMBER_LAST_SUFFIX'], 'string', 'max' => 2],
            [['STREET_NAME', 'LOCALITY_NAME'], 'string', 'max' => 100],
            [['STREET_TYPE_CODE', 'ADDRESS_DETAIL_PID', 'STREET_LOCALITY_PID'], 'string', 'max' => 15],
            [['POSTCODE'], 'string', 'max' => 4],
            [['LEGAL_PARCEL_ID'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FLAT_TYPE' => 'Flat  Type',
            'FLAT_NUMBER' => 'Flat  Number',
            'NUMBER_FIRST' => 'Number  First',
            'NUMBER_FIRST_PREFIX' => 'Number  First  Prefix',
            'NUMBER_FIRST_SUFFIX' => 'Number  First  Suffix',
            'NUMBER_LAST' => 'Number  Last',
            'NUMBER_LAST_PREFIX' => 'Number  Last  Prefix',
            'NUMBER_LAST_SUFFIX' => 'Number  Last  Suffix',
            'STREET_NAME' => 'Street  Name',
            'STREET_TYPE_CODE' => 'Street  Type  Code',
            'LOCALITY_NAME' => 'Locality  Name',
            'POSTCODE' => 'Postcode',
            'LATITUDE' => 'Latitude',
            'LONGITUDE' => 'Longitude',
            'LEGAL_PARCEL_ID' => 'Legal  Parcel  ID',
            'ADDRESS_DETAIL_PID' => 'Address  Detail  Pid',
            'STREET_LOCALITY_PID' => 'Street  Locality  Pid',
        ];
    }
}
