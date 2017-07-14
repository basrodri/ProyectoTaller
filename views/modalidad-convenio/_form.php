<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="Modalidad Convenio">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'NOMBRE_MODALIDAD_CONVENIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_MODALIDAD_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'ID_CONVENIO')->textInput() ?>

    

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
