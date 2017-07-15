<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoConvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-estado-convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_ESTADO_CONVENIO') ?>

    <?= $form->field($model, 'NOMBRE_ESTADO_CONVENIO') ?>

    <?= $form->field($model, 'DESCRIPCION') ?>

    <?= $form->field($model, 'VIGENTE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
