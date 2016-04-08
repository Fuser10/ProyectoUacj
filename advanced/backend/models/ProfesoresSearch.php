<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Profesores;

/**
 * ProfesoresSearch represents the model behind the search form about `backend\models\Profesores`.
 */
class ProfesoresSearch extends Profesores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profesor_id'], 'integer'],
            [['foto', 'nombre_completo', 'tipo_profesor', 'cubiculo', 'correo', 'celular', 'materias', 'primera_linea_investigacion', 'segunda_linea_investigacion', 'tercera_linea_investigacion', 'cuarta_linea_investigacion', 'redes_sociales'], 'safe'],
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
        $query = Profesores::find();

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

     //   $query->joinWith('lineaInvestigacion');
     //  $query->joinWith('lineaInvestigacion2');
      //  $query->joinWith('lineaInvestigacion3');
      //  $query->joinWith('lineaInvestigacion4');

        // grid filtering conditions
        $query->andFilterWhere([
             'profesor_id' => $this->profesor_id,
             'primera_linea_investigacion' => $this->primera_linea_investigacion,
             'segunda_linea_investigacion' => $this->segunda_linea_investigacion,
             'tercera_linea_investigacion' => $this->tercera_linea_investigacion,
             'cuarta_linea_investigacion' => $this->cuarta_linea_investigacion,

        ]);

        $query->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'nombre_completo', $this->nombre_completo])
            ->andFilterWhere(['like', 'tipo_profesor', $this->tipo_profesor])
            ->andFilterWhere(['like', 'cubiculo', $this->cubiculo])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'materias', $this->materias])
            ->andFilterWhere(['like', 'redes_sociales', $this->redes_sociales]);
            // ->andFilterWhere(['like', 'linea_investigacion.nombre_linea', $this->primera_linea_investigacion]);
             //->andFilterWhere(['like', 'linea_investigacion.nombre_linea', $this->segunda_linea_investigacion]);
             //->andFilterWhere(['like', 'linea_investigacion.nombre_linea', $this->tercera_linea_investigacion])
             //->andFilterWhere(['like', 'linea_investigacion.nombre_linea', $this->cuarta_linea_investigacion]);


        return $dataProvider;
    }
}
