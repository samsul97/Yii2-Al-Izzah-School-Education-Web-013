<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tk".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $telp
 * @property string $foto
 */
class Tk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'telp', 'foto'], 'required'],
            [['nama', 'email', 'telp', 'foto'], 'string', 'max' => 100],
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
            'email' => 'Email',
            'telp' => 'Telp',
            'foto' => 'Foto',
        ];
    }
    public static function getCount()
    {
        return static::find()->count();
    }
}
