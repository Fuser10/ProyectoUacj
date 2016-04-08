<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "linea_investigacion".
 *
 * @property integer $linea_id
 * @property string $nombre_linea
 */
class LineaInvestigacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'linea_investigacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_linea'], 'required'],
            [['nombre_linea'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'linea_id' => 'Linea ID',
            'nombre_linea' => 'Nombre Linea',
        ];
    }
}
