<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvLogin */

$this->title = 'Create Cnv Login';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-login-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
