<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadConvenio */
$this->title = 'Crear Modalidad Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Modalidad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Crear Modalidad Convenio">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

