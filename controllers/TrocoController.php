<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Troco;
class TrocoController extends Controller
{
    public $request;

    public function actionIndex()
    {
        $modelTroco = new Troco();
        $isPost = $this->request()->post();
        if( $isPost ){
            $modelTroco->total = $isPost['Troco']['total'];
            $modelTroco->calcularTroco();
        }
        return $this->render('index', ['model'=>$modelTroco]);
    }

    public function request(){
        return Yii::$app->request;
    }

}
