<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
  public static function getList()
  {
    return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id', 'nama');
  }
  public function getTK()
  {
    return $this->hasOne(TK::className(), ['id' => 'id_tk']);
  }
  public function getSD()
  {
    return $this->hasOne(SD::className(), ['id' => 'id_sd']);
  }
  public function getSMP()
  {
    return $this->hasOne(SMP::className(), ['id' => 'id_smp']);
  }
  // public function getKelola()
  // {
  //     return $this->hasOne(Kelola::className(), ['id' => 'id_kelola']);
  // }
  public static function tableName()
  {
    return 'user';
  }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
      return [
        [['username', 'password'], 'required'],
        [['id_tk', 'id_sd', 'id_smp', 'id_user_role', 'status'], 'integer'],
        [['username', 'token'], 'string', 'max' => 100],
        [['password'], 'string', 'max' => 100],
            // password varchar harus sama dengan database;
      ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
      return [
        'id' => 'ID',
        'username' => 'Username',
        'password' => 'Password',
        
        'id_sd' => 'SD',
        'id_sd' => 'SD',
        'id_smp' => 'SMP',
        'id_user_role' => 'User Role',
        'status' => 'Status',
        'token' => 'Token',
      ];
    }
    public static function findIdentity($id)
    {
      return self::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $Type = null)
    {
      return static::findOne(['access_token' => $token]);
    }
    public function getId()
    {   
      return $this->id;
    }
    public function getAuthKey()
    {
      return null;
    }
    public function validateAuthKey($authKey)
    {
      return $this->authKey === $authKey;
    }
    public static function findByUsername($username)
    {
      return self::findOne(['username' =>$username]);    
    }
    public function validatePassword($password)
    {
      // return $this->password == $password;
      return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
    public static function isAdmin()
    {
      if (Yii::$app->user->isGuest) {
        return false;
      }
      $model = User::findOne(['username' => Yii::$app->user->identity->username]);
      if ($model == null) {
        return false;
      } elseif ($model->id_user_role == 1) {
        return true;
      }
      return false;
    }
    public static function getFotoAdmin($htmlOptions=[])
    {
      return Html::img('@web/user/original.jpg', $htmlOptions);
    }

    public static function isTK()
    {
      if (Yii::$app->user->isGuest) {
        return false;
      }
      $model = User::findOne(['username' => Yii::$app->user->identity->username]);
      if ($model == null) {
        return false;
      } elseif ($model->id_user_role == 2) {
        return true;
      }
      return false;
    }
    public static function getFotoTK($htmlOptions=[])
    {
     $query = TK::find()
     ->andWhere(['id' => Yii::$app->user->identity->id_tk])
     ->one();

     if ($query->foto != null) {
       return Html::img('@web/user/' . $query->foto, $htmlOptions);
     } else {
       return Html::img('@web/user/no-images.png', $htmlOptions);
     }
   }


   public static function isSD()
   {
    if (Yii::$app->user->isGuest) {
      return false;
    }
    $model = User::findOne(['username' => Yii::$app->user->identity->username]);
    if ($model == null) {
      return false;
    } elseif ($model->id_user_role == 3) {
      return true;
    }
    return false;
  }
  public static function getFotoSD($htmlOptions=[])
  {
   $query = SD::find()
   ->andWhere(['id' => Yii::$app->user->identity->id_sd])
   ->one();

   if ($query->foto != null) {
     return Html::img('@web/user/' . $query->foto, $htmlOptions);
   } else {
     return Html::img('@web/user/no-images.png', $htmlOptions);
   }
 }

 public static function isSMP()
 {
  if (Yii::$app->user->isGuest) {
    return false;
  }
  $model = User::findOne(['username' => Yii::$app->user->identity->username]);
  if ($model == null) {
    return false;
  } elseif ($model->id_user_role == 4) {
    return true;
  }
  return false;
}
public static function getFotoSMP($htmlOptions=[])
{
 $query = SMP::find()
 ->andWhere(['id' => Yii::$app->user->identity->id_smp])
 ->one();

 if ($query->foto != null) {
   return Html::img('@web/user/' . $query->foto, $htmlOptions);
 } else {
   return Html::img('@web/user/no-images.png', $htmlOptions);
 }
}

public static function getLogo($htmlOptions=[])
{
  return Html::img('@web/user/original.jpg', $htmlOptions);
}
}
