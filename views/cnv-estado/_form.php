<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-estado-convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_ESTADO_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_ESTADO_CONVENIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
