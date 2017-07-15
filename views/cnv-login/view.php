<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CnvLogin */

$this->title = $model->ID_USUARIO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-login-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_USUARIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_USUARIO], [
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
            'NOMBRE',
            'APELLIDO_PATERNO',
            'APELLIDO_MATERNO',
            'RUT_USUARIO',
            'CONTRASEÑA',
            'ROL',
            'ID_USUARIO',
        ],
    ]) ?>

</div>
