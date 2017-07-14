<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadConvenio */
$this->title = $model->ID_MODALIDAD_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Universidad de Macondo - Modalidad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class= "Modalidad Convenio - Universidad de macondo">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ID_MODALIDAD_CONVENIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->ID_MODALIDAD_CONVENIO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas seguro de borrar este Item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
        'NOMBRE_MODALIDAD_CONVENIO',
            'ID_MODALIDAD_CONVENIO',
            'ID_CONVENIO',
            
            'DESCRIPCION',
            'VIGENTE',
        ],
    ]) ?>

</div>


