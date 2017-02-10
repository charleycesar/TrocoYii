<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Media */
/* @var $form ActiveForm */
?>
<div class="media-index">

    <?php $form = ActiveForm::begin(); ?>
        <?= $model->media; ?>
        <?= $form->field($model, 'nota1') ?>
        <?= $form->field($model, 'nota2') ?>
        <?= $form->field($model, 'nota3') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- media-index -->
