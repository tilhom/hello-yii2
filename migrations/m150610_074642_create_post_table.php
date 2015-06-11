<?php

use yii\db\Schema;
use yii\db\Migration;

class m150610_074642_create_post_table extends Migration
{
    public function safeUp()
    {
 
    	$this->createTable( 
    		'post', 
    		[
    		'id'=>Schema::TYPE_PK,
    		'post'=>Schema::TYPE_TEXT,
    		'user_id'=>Schema::TYPE_INTEGER,
    		]
    	);
    	$this->addForeignKey( 
    		'post_user_id', 
    		'post', 
    		'user_id', 
    		'user', 
    		'id' 
    	);
    }

    public function safeDown()
    {
        $this->dropTable('post');
    }
}
