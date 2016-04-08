<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sector".
 *
 * @property integer $sector_id
 * @property string $nombre_sector
 */
class Sector extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sector';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_sector'], 'required'],
            [['nombre_sector'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sector_id' => 'Sector ID',
            'nombre_sector' => 'Nombre sector',
        ];
    }
}
