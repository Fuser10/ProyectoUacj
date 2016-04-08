<?php

namespace backend\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "proyectos".
 *
 * @property integer $proyecto_id
 * @property string $nombre_proyecto
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_terminacion
 * @property integer $profesor_id
 * @property string $cantidad_alumnos
 * @property string $alumno1
 * @property string $alumno2
 * @property string $estatus
 * @property string $area
 * @property integer $sector_enfocado_id
 * @property integer $tipo_solucion_id
 * @property integer $linea_investigacion_id
 * @property string $lenguajes_usados
 * @property string $grado_estudios
 * @property string $documento
 */
class Proyectos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'proyectos';
    }

    /**
     * @inheritdoc
     */

public function getImageurl()
{
return Url::to('@web/' . $this->documento, true);
}


    public function rules()
    {
        return [
            [['nombre_proyecto', 'descripcion', 'fecha_inicio', 'fecha_terminacion', 'profesor_id', 'cantidad_alumnos', 'estatus', 'area', 'sector_enfocado_id', 'tipo_solucion_id', 'linea_investigacion_id', 'lenguajes_usados', 'grado_estudios'], 'required'],
            [['descripcion', 'cantidad_alumnos', 'estatus', 'area', 'grado_estudios'], 'string'],
            [['fecha_inicio', 'fecha_terminacion'], 'safe'],
            [['profesor_id', 'sector_enfocado_id', 'tipo_solucion_id', 'linea_investigacion_id'], 'integer'],
            [['nombre_proyecto' ], 'string', 'max' => 255],
            [['alumno1', 'alumno2', 'lenguajes_usados'], 'string', 'max' => 50],
            
            [['file'],'file'],
            [['documento'], 'string', 'max' => 200],
            [['linea_investigacion_id'], 'exist', 'skipOnError' => true, 'targetClass' => LineaInvestigacion::className(), 'targetAttribute' => ['linea_investigacion_id' => 'linea_id']],
            [['profesor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profesores::className(), 'targetAttribute' => ['profesor_id' => 'profesor_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proyecto_id' => 'Proyecto ID',
            'nombre_proyecto' => 'Nombre Proyecto',
            'descripcion' => 'Descripcion',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_terminacion' => 'Fecha Terminacion (si el proyecto aun no esta terminado seleccione una fecha aproximada de terminacion)',
            'profesor_id' => 'Profesor encargado',
            'cantidad_alumnos' => 'Cantidad Alumnos (Si el proyecto esta asignado o terminado seleccione cuantos alumnos participan o participaron , si esta sin asignar seleccione 0.)',
            'alumno1' => 'Alumno1 (puede dejar en blanco si el proyecto esta sin asignar)',
            'alumno2' => 'Alumno2 (puede dejar en blanco si el proyecto esta sin asignar o tiene solo 1 alumno)',
            'estatus' => 'Estatus del proyecto (si el proyecto ha sido asigando o no a algun alumno o ha sido terminado)',
            'area' => 'Area',
            'sector_enfocado_id' => 'Sector Enfocado ID',
            'tipo_solucion_id' => 'Tipo Solucion ID',
            'linea_investigacion_id' => 'Linea Investigacion ID',
            'lenguajes_usados' => 'Lenguajes Usados',
            'grado_estudios' => 'Grado Estudios',
            'documento' => 'Documento',
            'file' => 'Documento',

        ];
    }

    public function getProfesores()
    {
        return $this->hasOne(Profesores::className(), ['profesor_id' => 'profesor_id']);
    }

    public function getLineaInvestigacion()
    {
        return $this->hasOne(LineaInvestigacion::className(), ['linea_id' => 'linea_investigacion_id']);
    }

   public function getSector()
    {
        return $this->hasOne(Sector::className(), ['sector_id' => 'sector_enfocado_id']);
    }

    public function getTipoSolucion()
    {
        return $this->hasOne(TipoSolucion::className(), ['solucion_id' => 'tipo_solucion_id']);
   }
}
