<?php
/* @var $this yii\web\View */
/* @var $order \common\models\Order */

$this->title = 'Your Order';

echo \common\widgets\OrderViewWidget::widget([
    'order' => $order
])

?>

