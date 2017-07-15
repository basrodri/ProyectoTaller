<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvLoginSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Logins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-login-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Login', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NOMBRE',
            'APELLIDO_PATERNO',
            'APELLIDO_MATERNO',
            'RUT_USUARIO',
            'CONTRASEÑA',
            // 'ROL',
            // 'ID_USUARIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
