<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvModalidadConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Modalidad Convenios - Universidad de Macondo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Index Modalidad Convenio">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Modalidad Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'NOMBRE_MODALIDAD_CONVENIO',
            'ID_MODALIDAD_CONVENIO',
            'ID_CONVENIO',
            
            'DESCRIPCION',
            'VIGENTE',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>