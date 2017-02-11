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
            <?php if(sizeof($model->troco)==2): ?>
                <?php foreach ($model->troco['notas'] as $nota => $quantidade) : ?>
                    <?="{$quantidade} nota(s) de {$nota} <br>";?>
                <?php endforeach; ?>
                <?php foreach ($model->troco['moedas'] as $moeda => $quantidade) : ?>
                    <?="{$quantidade} moeda(s) de {$moeda} <br>";?>
                <?php endforeach; ?>
            <?php endif ?>
            <?= Html::submitButton('Calcular', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- troco-index -->
