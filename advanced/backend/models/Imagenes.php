<?php

namespace backend\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "imagenes".
 *
 * @property integer $id_imagen
 * @property string $url_imagen
 */
class Imagenes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imagenes';
    }

    /**
     * @inheritdoc
     */
    
public function getImageurl()
{
return Url::to('@web/' . $this->url_imagen, true);
}


    public function rules()
    {
        return [
            [['url_imagen'], 'required'],
            [['url_imagen'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_imagen' => 'Id Imagen',
            'url_imagen' => 'Url Imagen',
        ];
    }
}
