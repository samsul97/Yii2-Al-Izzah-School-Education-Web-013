<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khusus".
 *
 * @property int $id
 * @property string $nama
 */
class Khusus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'khusus';
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
}
