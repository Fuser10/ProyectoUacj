<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipo_solucion".
 *
 * @property integer $solucion_id
 * @property string $nombre_solucion
 */
class TipoSolucion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_solucion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_solucion'], 'required'],
            [['nombre_solucion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'solucion_id' => 'Solucion ID',
            'nombre_solucion' => 'Nombre Solucion',
        ];
    }
}
