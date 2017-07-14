<?php
use app\models\CnvEstadoConvenio;
/* @var $this yii\web\View */

$this->title = 'Sistema de Convenio';
$estado = CnvEstadoConvenio::find()->all();
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Sistema de convenio!</h1>
    </div>

    <div class="body-content">

            <div id="boton">
                <p><a class="btn btn-lg btn-success" href="?r=cnv-estado">Crear Estado</a></p></a></p>
            </div>

        <div>
        <?php  foreach ($estado as $key => $value) { ?>
        <div class="row">
                    <table class="table table-bordered">
                         <tr>
                            <td class="info">Id Estado Convenio</td>  
                            <td class="info">Nombre Estado Convenio</td>
                            <td class="info">Descripcion</td>
                            <td class="info">Vigente</td>
                        </tr>
                        <tr>
                            <td class="info"><?php echo $value->ID_ESTADO_CONVENIO?></td>  
                            <td class="info"><?php echo $value->NOMBRE_ESTADO_CONVENIO?></td>  
                            <td class="info"><?php echo $value->DESCRIPCION?></td>  
                            <td class="info"><?php echo $value->VIGENTE?></td>  
                        </tr>
                     </table>
            
                </div> 
        <?php } ?>
    </div>
    </div>
</div>
