<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_login".
 *
 * @property string $NOMBRE
 * @property string $APELLIDO_PATERNO
 * @property string $APELLIDO_MATERNO
 * @property string $RUT_USUARIO
 * @property string $CONTRASEÑA
 * @property integer $ROL
 * @property integer $ID_USUARIO
 */
class CnvLogin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RUT_USUARIO', 'ROL', 'ID_USUARIO'], 'required'],
            [['ROL', 'ID_USUARIO'], 'integer'],
            [['NOMBRE'], 'string', 'max' => 200],
            [['APELLIDO_PATERNO', 'APELLIDO_MATERNO'], 'string', 'max' => 30],
            [['RUT_USUARIO'], 'string', 'max' => 12],
            [['CONTRASEÑA'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NOMBRE' => 'Nombre',
            'APELLIDO_PATERNO' => 'Apellido  Paterno',
            'APELLIDO_MATERNO' => 'Apellido  Materno',
            'RUT_USUARIO' => 'Rut  Usuario',
            'CONTRASEÑA' => 'ContraseÑ A',
            'ROL' => 'Rol',
            'ID_USUARIO' => 'Id  Usuario',
        ];
    }
}
