<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $name
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    public static function categoryData(){
        $data = self::find()->asArray()->all();

        return ArrayHelper::map($data,'id', 'name');
    }

    public static function categoryMenu(){
        $data = self::categoryData();
        $res = [];
        foreach ($data as $id => $name){
            $res[] = [
                'label' => $name,
                'url' => '/frontend/web/main/category?id=' . $id
            ];
        }
        return $res;
    }
}
