<?php


namespace common\widgets;


use http\Url;
use yii\bootstrap\Widget;

class MenuWidget extends Widget
{
    public $data = [];
    public $layout = [
        'item' => <<<HTML
    <div>
    <a href="{link}">{text}</a>
</div>
HTML,
        'main' => <<<HTML
<div>{items}</div>
HTML,

    ];

    public function run()
    {
        $items = '';
        foreach ($this->data as $id => $text){
            $items .= strtr($this->layout['item'], [
                '{link}' => \yii\helpers\Url::to([
                    '/main/category',
                    'id' => $id
                ]),
                '{text}' => $text
            ]);
        }

        echo strtr($this->layout['main'], [
            '{items}' => $items
        ]);

    }
}