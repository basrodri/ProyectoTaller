<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\Helpers\ArrayHelper;
use kartik\select2\Select2;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\CnvActividadConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-actividad-convenio-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

  <!--  <?= $form->field($model, 'FECHA_INICIO')->textInput() ?> -->

<?= $form->field($model, 'FECHA_INICIO')->widget(
                    DatePicker::className(), [
                        // inline too, not bad
                         'inline' => false,
                         'language' => 'es', 
                         'options' => ['placeholder' => 'Selecione fecha'],
                         // modify template for custom rendering
                        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-m-d'
                        ]
                ]);?>

 <!--   <?= $form->field($model, 'FECHA_FIN')->textInput() ?> -->

 <?= $form->field($model, 'FECHA_FIN')->widget(
                    DatePicker::className(), [
                        // inline too, not bad
                         'inline' => false,
                         'language' => 'es', 
                         'options' => ['placeholder' => 'Selecione fecha'],
                         // modify template for custom rendering
                        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-m-d'
                        ]
                ]);?>

   <!--  <?= $form->field($model, 'ID_ACTIVIDAD_CONVENIO')->textInput() ?> -->

    <?= $form->field($model, 'ID_CONVENIO')->textInput() ?>



    <?= $form->field($model, 'NOMBRE_ACTIVIDAD')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'DESCRIPCION')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'language' => 'es',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
