<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CnvActividadConvenio */

$this->title = $model->NOMBRE_ACTIVIDAD;
$this->params['breadcrumbs'][] = ['label' => 'Actividad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-actividad-convenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ID_ACTIVIDAD_CONVENIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->ID_ACTIVIDAD_CONVENIO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Está seguro de eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FECHA_INICIO',
            'FECHA_FIN',
            'ID_ACTIVIDAD_CONVENIO',
            'ID_CONVENIO',
            'NOMBRE_ACTIVIDAD',
            'DESCRIPCION',
        ],
    ]) ?>

</div>
