<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoConvenio */

$this->title = $model->ID_ESTADO_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Estado Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-estado-convenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_ESTADO_CONVENIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_ESTADO_CONVENIO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_ESTADO_CONVENIO',
            'NOMBRE_ESTADO_CONVENIO',
            'DESCRIPCION',
            'VIGENTE',
        ],
    ]) ?>

</div>
