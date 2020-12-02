<?php

use yii\db\Migration;

/**
 * Class m201202_043232_change
 */
class m201202_043232_change extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'desc', 'text');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201202_043232_change cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201202_043232_change cannot be reverted.\n";

        return false;
    }
    */
}
