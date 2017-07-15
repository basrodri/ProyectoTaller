<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvObjetivoConvenioSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-objetivo-convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_OBJETIVO_CONVENIO') ?>

    <?= $form->field($model, 'ID_CONVENIO') ?>

    <?= $form->field($model, 'TEXTO_OBJETIVO') ?>

    <?= $form->field($model, 'VIGENTE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
