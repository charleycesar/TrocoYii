<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $model app\models\Media */
/* @var $form ActiveForm */
$this->registerJsFile('@web/js/index.js', ['depends'=>['app\assets\AppAsset']]);

?>
<div class="media-index">

    <?php $form = ActiveForm::begin(); ?>
        <?= $model->media; ?>
        <?= $form->field($model, 'nota1') ?>
        <div id="notasAppend">

        </div>
        <div class="form-group">
            <?= Html::Button('AdicionarNota', ['class' => 'btn btn-primary','id' => 'adicionarNota']) ?>
            <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- media-index -->
