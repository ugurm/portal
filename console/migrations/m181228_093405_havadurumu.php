<?php

use yii\db\Migration;

/**
 * Class m181228_093405_havadurumu
 */
class m181228_093405_havadurumu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {

        
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'city';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'gorunen_ad' =>$this->string(200)->notNull(),
            'ad' => $this->string(200)->notNull()

        ], $tableOptions);



       
        $TABLE_NAME = 'fav';

        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
			'il_id' => $this->integer()->notNull()
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
		
		






    }



    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('city');
        $this->dropTable('fav');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181224_153148_odev cannot be reverted.\n";

        return false;
    }
    */
}
