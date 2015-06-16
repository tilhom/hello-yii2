<?php 
/**
 * 
 */
namespace app\models;

use yii\base\Model;
use Yii;


class LoginForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $status;
    public $rememberMe=true; 
    
    public function rules()
    {
        return [
            [['username', 'password' ], 'required', 'on'=>'default'],
            ['email', 'email'],
            ['rememberMe','boolean'],
            ['password','validatePassword']

        ];
    }

    public function validatePassword($attribute)
    {
        if (!$this->hasErrors()) 
            if ($this->password!='123') {
                $this->addError($attribute,"Неправильный пароль");
            }
        
    }

    public function attributeLabels()
    {
        return [
            'username'=>'Имя пользователя',
            'password'=>'Пароль',
            'remeberMe'=>'Запомнить меня'
        ];
    }

    public function login()
    {
        if ($this->validate())
            return true;
        else
            return false;
    }
}