<?php

namespace frontend\controllers;

use common\models\Order;
use common\models\Product;
use Yii;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCategory($id){

        return $this->render('category', [
            'id' => $id
        ]);
    }

    public function actionBuy($id){
        $product = \common\models\Product::findOne($id);
        $model = new Order();
        $model->product_id = $id;
        $model->summa = $product->price;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('buy', [
            'model' => $model,
            'id' => $id
        ]);
    }

    public function actionView($id){
        $order = Order::findOne($id);

        return $this->render('view', [
            'order' => $order
        ]);
    }

}
