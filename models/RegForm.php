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
	
	public function rules()
	{
		return [
			[
				['username', 'password', 'email' ],
				'required'
			]

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
}