<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $user_id
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property string $roles
 * @property string $accessToken
 */
class Users1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'authkey', 'roles', 'accessToken'], 'required'],
            [['username', 'password'], 'string', 'max' => 16],
            [['authkey', 'accessToken'], 'string', 'max' => 50],
            [['roles'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'roles' => 'Roles',
            'accessToken' => 'Access Token',
        ];
    }
}
