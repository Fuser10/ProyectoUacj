<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Proyectos;

/**
 * ProyectosSearch represents the model behind the search form about `backend\models\Proyectos`.
 */
class ProyectosSearch extends Proyectos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proyecto_id'], 'integer'],
            [['nombre_proyecto', 'descripcion', 'fecha_inicio', 'profesor_id','fecha_terminacion', 'cantidad_alumnos', 'alumno1', 'alumno2', 'estatus', 'area', 'lenguajes_usados', 'grado_estudios','sector_enfocado_id','tipo_solucion_id', 'linea_investigacion_id', 'documento'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Proyectos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

//$query->joinWith('profesores');
//$query->joinWith('lineaInvestigacion');
//$query->joinWith('sector');
//$query->joinWith('tipoSolucion');

        // grid filtering conditions
        $query->andFilterWhere([
            'proyecto_id' => $this->proyecto_id,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_terminacion' => $this->fecha_terminacion,
            'profesor_id' => $this->profesor_id,
            'sector_enfocado_id' => $this->sector_enfocado_id,
            'tipo_solucion_id' => $this->tipo_solucion_id,
            'linea_investigacion_id' => $this->linea_investigacion_id,
    
        ]);

        $query->andFilterWhere(['like', 'nombre_proyecto', $this->nombre_proyecto])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'cantidad_alumnos', $this->cantidad_alumnos])
            ->andFilterWhere(['like', 'alumno1', $this->alumno1])
            ->andFilterWhere(['like', 'alumno2', $this->alumno2])
            ->andFilterWhere(['like', 'estatus', $this->estatus])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'lenguajes_usados', $this->lenguajes_usados])
            ->andFilterWhere(['like', 'grado_estudios', $this->grado_estudios])
            ->andFilterWhere(['like', 'documento', $this->documento]);
            //->andFilterWhere(['like', 'profesores.nombre_completo', $this->profesor_id])
            //->andFilterWhere(['like', 'linea_investigacion.nombre_linea', $this->linea_investigacion_id]);

            //->andFilterWhere(['like', 'sector.nombre_sector', $this->sector_enfocado_id])
           // ->andFilterWhere(['like', 'tipo_solucion.nombre_solucion', $this->tipo_solucion_id]);
        return $dataProvider;
    }
}
