<?php

namespace app\controllers;
use app\models\Boletim;
use Yii;

class BoletimController extends \yii\web\Controller
{
    /**
    *   @url ?r=media/index
    **/

    public function actionIndex()
    {
        $model = new Boletim();
        if( Yii::$app->request->post() ){
            $data = Yii::$app->request->post('Media');
            $model->notas = $data['notas'];
            $model->calcularMedia();
        }
        return $this->render('index', ['model'=>$model]);
    }

}
