<?php

use yii\db\Schema;
use yii\db\Migration;

class m150611_061806_add_user extends Migration
{
    public function up()
    {
    	$password = Yii::$app->security->generatePasswordHash('admin');
    	$this->execute(

		"INSERT INTO {{%user}} (`email`, `password`) VALUES ('admin@myblog.loc', '$password')"
    		);
    }

    public function down()
    {
        $this->execute(

		"DELETE FROM {{%user}} WHERE email='admin@myblog.loc'"
    		);
    }
}
