<?php

namespace backend\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "profesores".
 *
 * @property integer $profesor_id
 * @property string $foto
 * @property string $nombre_completo
 * @property string $tipo_profesor
 * @property string $cubiculo
 * @property string $correo
 * @property string $celular
 * @property string $materias
 * @property integer $primera_linea_investigacion
 * @property integer $segunda_linea_investigacion
 * @property integer $tercera_linea_investigacion
 * @property integer $cuarta_linea_investigacion
 * @property string $proyectos
 * @property string $redes_sociales
 */
class Profesores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;

    public static function tableName()
    {
        return 'profesores';
    }

    /**
     * @inheritdoc
     */

    public function getImageurl()
{
return Url::to('@web/' . $this->foto, true);
}

    public function rules()
    {
        return [
            [['nombre_completo', 'tipo_profesor', 'correo', 'materias', 'primera_linea_investigacion', 'segunda_linea_investigacion', 'tercera_linea_investigacion', 'cuarta_linea_investigacion'], 'required'],
            [['tipo_profesor'], 'string'],
            [['primera_linea_investigacion', 'segunda_linea_investigacion', 'tercera_linea_investigacion', 'cuarta_linea_investigacion'], 'integer'],

            [['file'],'file'],
            [['foto', 'redes_sociales'], 'string', 'max' => 250],
            [['nombre_completo'], 'string', 'max' => 100],
            [['cubiculo'], 'string', 'max' => 30],
            [['correo', 'celular'], 'string', 'max' => 50],
            [['materias'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'profesor_id' => 'Profesor ID',
            'file' => 'Seleccione una foto suya',
            'foto' => 'Foto',
            'nombre_completo' => 'Nombre Profesor',
            'tipo_profesor' => 'Tipo Profesor',
            'cubiculo' => 'Cubiculo',
            'correo' => 'Correo',
            'celular' => 'Celular',
            'materias' => 'Materias',
            'primera_linea_investigacion' => 'Primera Linea Investigacion',
            'segunda_linea_investigacion' => 'Segunda Linea Investigacion',
            'tercera_linea_investigacion' => 'Tercera Linea Investigacion',
            'cuarta_linea_investigacion' => 'Cuarta Linea Investigacion',
            'redes_sociales' => 'Redes Sociales',
        ];
    }
    public function getLineaInvestigacion()
    {
        return $this->hasOne(LineaInvestigacion::className(), ['linea_id' => 'primera_linea_investigacion']);

    }

          public function getLineaInvestigacion2()
    {
        return $this->hasOne(LineaInvestigacion::className(), ['linea_id' => 'segunda_linea_investigacion']);
    }

          public function getLineaInvestigacion3()
    {
        return $this->hasOne(LineaInvestigacion::className(), ['linea_id' => 'tercera_linea_investigacion']);
    }

          public function getLineaInvestigacion4()
   {
        return $this->hasOne(LineaInvestigacion::className(), ['linea_id' => 'cuarta_linea_investigacion']);
   }


}
