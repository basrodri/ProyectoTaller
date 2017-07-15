<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvLogin */

$this->title = 'Update Cnv Login: ' . $model->ID_USUARIO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_USUARIO, 'url' => ['view', 'id' => $model->ID_USUARIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-login-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
