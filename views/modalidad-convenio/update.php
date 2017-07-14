<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadConvenio */
$this->title = 'Actualizar Modalidad Convenio: ' . $model->ID_MODALIDAD_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Modalidad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_MODALIDAD_CONVENIO, 'url' => ['view', 'id' => $model->ID_MODALIDAD_CONVENIO]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="Actualizar Modalidad Convenio">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>