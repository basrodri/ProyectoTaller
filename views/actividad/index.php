<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvActividadConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividad Convenio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-actividad-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Actividad Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


         <?php 
        Modal::begin([
            'header' => '<h2> Actividad Convenio</h2>',
            'toggleButton' => ['label' => 'click me'],

        ]);

        //echo 'Say hello...';


        Modal::end();
             ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_ESTADO_ACTIVIDAD',
            'ID_TIPO_ACTIVIDAD',
            'ID_RESPONSABLE_ACTIVIDAD',
            'FECHA_INICIO',
            'FECHA_FIN',
            // 'ID_ACTIVIDAD_CONVENIO',
            // 'ID_CONVENIO',
            // 'NOMBRE_ACTIVIDAD',
            // 'DESCRIPCION',
            // 'VIGENTE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
