<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoConvenio */

$this->title = 'Update Cnv Estado Convenio: ' . $model->ID_ESTADO_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Estado Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_ESTADO_CONVENIO, 'url' => ['view', 'id' => $model->ID_ESTADO_CONVENIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-estado-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
