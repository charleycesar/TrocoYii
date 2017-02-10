<?php

namespace app\controllers;
use app\models\Media;
use Yii;

class MediaController extends \yii\web\Controller
{
    /**
    *   @url ?r=media/index
    **/

    public function actionIndex()
    {
        $model = new Media();
        if( Yii::$app->request->post() ){
            $data = Yii::$app->request->post('Media');
            $model->nota1 = $data['nota1'];
            $model->nota2 = $data['nota2'];
            $model->nota3 = $data['nota3'];
            $model->calcularMedia();
        }
        return $this->render('index', ['model'=>$model]);
    }

}
