<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvObjetivoConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-objetivo-convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_OBJETIVO_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'ID_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'TEXTO_OBJETIVO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
