<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "havadurumu".
 *
 * @property int $illerid
 * @property int $servisid
 * @property int $imgid
 * @property int $favid
 * @property int $olcekc
 * @property int $roleid
 * @property int $olcekf
 */
class Havadurumu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'havadurumu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['servisid', 'imgid', 'favid', 'olcekc', 'roleid', 'olcekf'], 'required'],
            [['servisid', 'imgid', 'favid', 'olcekc', 'roleid', 'olcekf'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'illerid' => 'Illerid',
            'servisid' => 'Servisid',
            'imgid' => 'Imgid',
            'favid' => 'Favid',
            'olcekc' => 'Olcekc',
            'roleid' => 'Roleid',
            'olcekf' => 'Olcekf',
        ];
    }
}
