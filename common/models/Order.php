<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string|null $address
 * @property int|null $product_id
 * @property int|null $summa
 * @property string|null $phone
 * @property string|null $user_name
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'summa'], 'integer'],
            [['address', 'phone', 'user_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'product_id' => 'Product ID',
            'summa' => 'Summa',
            'phone' => 'Phone',
            'user_name' => 'User Name',
        ];
    }
}
