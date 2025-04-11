<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tahun".
 *
 * @property int $id
 * @property string $nama
 */
class Tahun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tahun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 50],
            // [['id'], 'integer'],
            // [['id'], 'unique'],
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
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id', 'nama');
    }
}
