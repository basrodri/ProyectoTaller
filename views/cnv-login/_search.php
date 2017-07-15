<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvLoginSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-login-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'NOMBRE') ?>

    <?= $form->field($model, 'APELLIDO_PATERNO') ?>

    <?= $form->field($model, 'APELLIDO_MATERNO') ?>

    <?= $form->field($model, 'RUT_USUARIO') ?>

    <?= $form->field($model, 'CONTRASEÑA') ?>

    <?php // echo $form->field($model, 'ROL') ?>

    <?php // echo $form->field($model, 'ID_USUARIO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
