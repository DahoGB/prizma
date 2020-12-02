<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $price
 * @property int|null $category_id
 * @property string|null $desc
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'category_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['desc'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'category_id' => 'Category ID',
            'desc' => 'Description',
        ];
    }

    public static function productData(){
        $records = self::find()->asArray()->all();
        return ArrayHelper::map($records, 'id', 'name');
    }
}
