<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvLogin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-login-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'APELLIDO_PATERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'APELLIDO_MATERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUT_USUARIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CONTRASEÑA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ROL')->textInput() ?>

    <?= $form->field($model, 'ID_USUARIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
