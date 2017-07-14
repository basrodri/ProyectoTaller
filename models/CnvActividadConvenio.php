<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "cnv_actividad_convenio".
 *
 * @property string $FECHA_INICIO
 * @property string $FECHA_FIN
 * @property integer $ID_ACTIVIDAD_CONVENIO
 * @property integer $ID_CONVENIO
 * @property string $NOMBRE_ACTIVIDAD
 * @property string $DESCRIPCION
 *
 * @property CnvConvenio $iDCONVENIO
 */
class CnvActividadConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_actividad_convenio';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_CONVENIO'], 'required'],
            [['FECHA_INICIO', 'FECHA_FIN'], 'safe'],
            [['NOMBRE_ACTIVIDAD'], 'string', 'max' => 200],
            [['DESCRIPCION'], 'string', 'max' => 500],
            [['ID_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CnvConvenio::className(), 'targetAttribute' => ['ID_CONVENIO' => 'ID_CONVENIO']],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FECHA_INICIO' => 'Fecha  Inicio',
            'FECHA_FIN' => 'Fecha  Fin',
            'ID_ACTIVIDAD_CONVENIO' => 'Id  Actividad  Convenio',
            'ID_CONVENIO' => 'Id  Convenio',
            'NOMBRE_ACTIVIDAD' => 'Nombre  Actividad',
            'DESCRIPCION' => 'Descripcion',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCONVENIO()
    {
        return $this->hasOne(CnvConvenio::className(), ['ID_CONVENIO' => 'ID_CONVENIO']);
    }
}
