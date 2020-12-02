<?php

use yii\db\Migration;

/**
 * Class m201202_060901_modify_order
 */
class m201202_060901_modify_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('order', 'user_id');
        $this->addColumn('order', 'user_name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201202_060901_modify_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201202_060901_modify_order cannot be reverted.\n";

        return false;
    }
    */
}
