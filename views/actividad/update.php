<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvActividadConvenio */

$this->title = 'Actualizar Actividad Convenio: ' . $model->NOMBRE_ACTIVIDAD;
$this->params['breadcrumbs'][] = ['label' => 'Actividad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NOMBRE_ACTIVIDAD, 'url' => ['view', 'id' => $model->ID_ACTIVIDAD_CONVENIO]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cnv-actividad-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
