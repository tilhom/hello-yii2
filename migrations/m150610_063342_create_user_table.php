<?php

use yii\db\Schema;
use yii\db\Migration;


class m150610_063342_create_user_table extends Migration
{
    public function up()
    {
    	$table='user';
    	$columns=[
    		'id'=>'pk',
    		'password'=>'string NOT NULL',
    		'email'=>'string NOT NULL',
    	];

    	$this->createTable( $table, $columns);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}

