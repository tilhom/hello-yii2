<?php

use yii\db\Schema;
use yii\db\Migration;

class m150615_163416_create_user_table extends Migration
{
    public function up()
    {
    	$this->createTable('user',[
    		'id'=>Schema::TYPE_PK,
    		'username'=>Schema::TYPE_STRING.' NOT NULL',
    		'email'=>Schema::TYPE_STRING.' NOT NULL',
    		'password_hash'=>Schema::TYPE_STRING.' NOT NULL',
    		'status'=>Schema::TYPE_SMALLINT.' NOT NULL',
    		'auth_key'=>Schema::TYPE_STRING.'(32) NOT NULL',
    		'created_at'=>Schema::TYPE_INTEGER.' NOT NULL',
    		'updated_at'=>Schema::TYPE_INTEGER.' NOT NULL'

    	]);

    }

    public function down()
    {
        $this->dropTable('user');
    }
}
