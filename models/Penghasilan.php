<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penghasilan".
 *
 * @property int $id
 * @property string $nama
 */
class Penghasilan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penghasilan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }
    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'nama', 'nama');
    }
    public static function getCount()
    {
        return static::find()->count();
    }
}
