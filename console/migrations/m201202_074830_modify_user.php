<?php

use yii\db\Migration;

/**
 * Class m201202_074830_modify_user
 */
class m201202_074830_modify_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'role', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201202_074830_modify_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201202_074830_modify_user cannot be reverted.\n";

        return false;
    }
    */
}
