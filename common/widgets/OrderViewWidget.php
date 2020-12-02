<?php


namespace common\widgets;


use common\models\Order;
use common\models\Product;
use yii\base\Widget;

class OrderViewWidget extends Widget
{
    public ?Order $order = null;
    public $layout = [
        'main' => <<<HTML
<div class="card text-center">
  <div class="card-header">
    Buyurtmangizni qabul qildik, siz bilan tez orada mutaxasisimiz sizga {phone} raqami orqali bog'lanadi.
  </div>
  <div class="card-body">
    <h5 class="card-title">Hurmatli, {name}, siz quyidagi mahsulotni buyurtma qildingiz.</h5>
    <p class="card-text">
    {product}
</p>
  </div>
  
</div>

HTML,


    ];

    public function run()
    {
        $product = Product::findOne($this->order->product_id);
        $card = CardWidget::widget([
            'product' => $product,
            'col' => 12,
            'button' => false
        ]);
        echo strtr($this->layout['main'], [
            '{phone}' => $this->order->phone,
            '{name}' => $this->order->user_name,
            '{product_name}' => $product->name,
            '{product_desc}' => $product->desc,
            '{product_price}' => $product->price,
            '{product}' => $card
        ]);


    }
}