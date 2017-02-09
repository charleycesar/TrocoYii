<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Troco */
/* @var $form ActiveForm */
?>
<div class="troco-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'total') ?>

        <div class="form-group">
            <?php foreach ($model->troco as $nota => $quantidade) : ?>
                <?="{$quantidade} nota(s) de {$nota} <br>";?>
            <?php endforeach; ?>
            <?= Html::submitButton('Calcular', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- troco-index -->
