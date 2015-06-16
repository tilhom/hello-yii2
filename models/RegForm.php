<?php 
/**
 * 
 */
namespace app\models;

use yii\base\Model;
use Yii;


class RegForm extends Model
{
	public $username;
	public $email;
	public $password;
	public $status;
	
	public function rules()
	{
		return [
			[['username', 'password', 'email' ],'filter', 'filter'=>'trim'],
			[['username', 'password', 'email' ],'required'],
            ['username', 'string','min'=>2, 'max'=>255],
            ['username','unique', 
	            'targetClass'=>User::classname(),
	            'message'=>'Это имя занято!'],
            ['email', 'email'],
            ['email','unique',
             	'targetClass'=>User::classname(),
            	'message'=>'Эта почта уже зарегистрирована!'],
            [status, 'default', 'value'=>User::STATUS_ACTIVE, 'on'=>'default'],
            ['status', 'in', 'range'=>[
            	User::STATUS_NOT_ACTIVE,
            	User::STATUS_ACTIVE
            	]],

		];
	}

	public function attributeLabels()
	{
		return [
			'username'=>'Имя пользователя',
			'email'=>'Эл.почта',
			'password'=>'Пароль'
		];
	}

	public function reg()
	{ 
		return false;
	}
}