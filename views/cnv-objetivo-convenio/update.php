<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvObjetivoConvenio */

$this->title = 'Update Cnv Objetivo Convenio: ' . $model->ID_OBJETIVO_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Objetivo Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_OBJETIVO_CONVENIO, 'url' => ['view', 'id' => $model->ID_OBJETIVO_CONVENIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-objetivo-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
