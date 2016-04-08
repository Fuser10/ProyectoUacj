<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\LineaInvestigacion;

/**
 * LineaInvestigacionSearch represents the model behind the search form about `backend\models\LineaInvestigacion`.
 */
class LineaInvestigacionSearch extends LineaInvestigacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['linea_id'], 'integer'],
            [['nombre_linea'], 'safe'],
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
        $query = LineaInvestigacion::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'linea_id' => $this->linea_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_linea', $this->nombre_linea]);

        return $dataProvider;
    }
}
