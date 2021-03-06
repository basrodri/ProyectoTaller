<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelpers;
use yii\web\UrlManager;
use yii\helpers\BaseUrl;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvActividadConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividad Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-actividad-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Actividad Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FECHA_INICIO',
            'FECHA_FIN',
            'ID_ACTIVIDAD_CONVENIO',
            'ID_CONVENIO',
            'NOMBRE_ACTIVIDAD',
            // 'DESCRIPCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
