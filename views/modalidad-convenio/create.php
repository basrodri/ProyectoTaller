<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadConvenio */

$this->title = 'Create Cnv Modalidad Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Modalidad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-modalidad-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
