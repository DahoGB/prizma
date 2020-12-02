<?php


namespace common\widgets;


use common\models\Product;
use yii\base\Widget;
use yii\helpers\Url;

class CardWidget extends Widget
{
    public $col = 4;
    public $button = true;
    public Product $product;
    public $layout = [
        'main' => <<<HTML
<div class="card col-md-{col}">
  <img src="{img}" class="card-img-top" alt="{name}">
  <div class="card-body">
    <h5 class="card-title">{name}</h5>
    <p class="card-text">{desc}</p>
    <p class="card-text">Narxi: {price}</p>
    {button}
  </div>
</div>
HTML,
        'button' => <<<HTML
<a href="{link}" class="btn btn-primary">Sotib olish</a>
HTML,

    ];
    public function run()
    {
        $button = '';
        if ($this->button)
            $button = strtr($this->layout['button'], [
                '{link}' => Url::to([
                    '/main/buy',
                    'id' => $this->product->id
                ]),
            ]);
        echo strtr($this->layout['main'], [
            '{name}' => $this->product->name,
            '{desc}' => $this->product->desc,
            '{img}' => '/images/noimage.jpg',
            '{button}' => $button,
            '{price}' => $this->product->price,
            '{col}' => $this->col
        ]);
    }
}