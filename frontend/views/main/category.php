<?php
/* @var $this yii\web\View */
/* @var $id int */

$this->title = 'Products';

$query = \common\models\Product::find()
    ->where([
        'category_id' => $id
    ]);

$dataProvider = new \yii\data\ActiveDataProvider([
    'query' => $query,
    'pagination' => [
          'pageSize' => 9,
      ],
]);
echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,

    'itemView' => function($model, $key, $id, $widget){
        return \common\widgets\CardWidget::widget([
            'product' => $model
        ]);
    }
])

?>

