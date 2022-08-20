<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $user_id;
    public $username;
    public $password;
    public $authkey;
    public $accessToken;
    public $roles;

    private static $users = [
        '100' => [
            'user_id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authkey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'user_id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authkey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($user_id)
    {
        // return isset(self::$users[$user_id]) ? new static(self::$users[$user_id]) : null;
        $user = Users1::findOne($user_id);
        if (count((array)$user)){
            return new static($user);
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // foreach (self::$users as $user) {
        //     if ($user['accessToken'] === $token) {
        //         return new static($user);
        //     }
        // }
        $user = Users1::find()->where(['accessToken'=>$token])->one();
        if (count((array)$user)){
            return new static($user);
        }
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        // foreach (self::$users as $user) {
        //     if (strcasecmp($user['username'], $username) === 0) {
        //         return new static($user);
        //     }
        // }
        $user = Users1::find()->where(['username'=>$username])->one();
        if (count((array)$user)){
            return new static($user);
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        //return $this->id;
        return $this->user_id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authkey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authkey)
    {
        return $this->authkey === $authkey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
