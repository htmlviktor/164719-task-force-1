<?php

use yii\db\Migration;

/**
 * Class m200709_154427_drop_pk_executor_id_table_task
 */
class m200709_154427_drop_pk_executor_id_table_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $this->dropForeignKey(
		    'task_ibfk_3',
		    'task'
	    );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200709_154427_drop_pk_executor_id_table_task cannot be reverted.\n";

        return false;
    }
    */
}
