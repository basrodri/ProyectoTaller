<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\CnvActividadConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-actividad-convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_ESTADO_ACTIVIDAD')->textInput() ?>

    <?= $form->field($model, 'ID_TIPO_ACTIVIDAD')->textInput() ?>

    <?= $form->field($model, 'ID_RESPONSABLE_ACTIVIDAD')->textInput(['maxlength' => true]) ?>

   <!-- <?= $form->field($model, 'FECHA_INICIO')->textInput() ?>-->

                <?= $form->field($model, 'FECHA_INICIO')->widget(
                    DatePicker::className(), [
                        // inline too, not bad
                         'inline' => false,
                         'language' => 'es', 
                         'options' => ['placeholder' => 'Selecione Fecha'],
                         // modify template for custom rendering
                        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-m-d'
                        ]
                ]);?>

    <!-- <?= $form->field($model, 'FECHA_FIN')->textInput() ?>-->

                    <?= $form->field($model, 'FECHA_FIN')->widget(
                    DatePicker::className(), [
                        // inline too, not bad
                         'inline' => false,
                         'language' => 'es', 
                         'options' => ['placeholder' => 'Selecione Fecha'],
                         // modify template for custom rendering
                        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-m-d'
                        ]
                ]);?>

                

    <?= $form->field($model, 'ID_ACTIVIDAD_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'ID_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_ACTIVIDAD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
