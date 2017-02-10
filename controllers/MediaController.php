<?php

namespace app\controllers;
use app\models\Media;

class MediaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Media();
        return $this->render('index', ['model'=>$model]);
    }

}
