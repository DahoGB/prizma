<?php

use yii\db\Migration;

/**
 * Class m201201_055731_main
 */
class m201201_055731_main extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'price' => $this->integer(),
            'category_id' => $this->integer()
        ]);

        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'product_ids' => $this->json(),
            'user_id' => $this->integer(),
            'address' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201201_055731_main cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201201_055731_main cannot be reverted.\n";

        return false;
    }
    */
}
