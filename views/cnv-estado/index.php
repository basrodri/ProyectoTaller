<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvEstadoConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Estado Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-estado-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Cnv Estado Convenio', ['value'=>Url::to('index.php?r=cnv-estado/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>
    
    <?php 
        Modal::begin([
            'header' => '<h2>Crear Estado</h2>',
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);

        echo "<div id='modalContent'></div>";

        Modal::end();
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_ESTADO_CONVENIO',
            'NOMBRE_ESTADO_CONVENIO',
            'DESCRIPCION',
            'VIGENTE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
