<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvObjetivoConvenioSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Objetivo de Convenio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-objetivo-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar un nuevo objetivo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_OBJETIVO_CONVENIO',
            'ID_CONVENIO',
            'TEXTO_OBJETIVO',
            'VIGENTE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
