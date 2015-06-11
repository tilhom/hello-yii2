<?php

use yii\db\Schema;
use yii\db\Migration;


class m150610_063342_create_user_table extends Migration
{
    public function up()
    {
    	$table='user';
    	$columns=[
    		'id'=>Schema::TYPE_PK,
    		'password'=>Schema::TYPE_STRING.' NOT NULL',
    		'email'=>Schema::TYPE_STRING.' NOT NULL',
    	];

    	$this->createTable( $table, $columns);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}

