<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvCoordinadorConvenio;

/**
 * CnvCoordinadorConvenioSearch represents the model behind the search form about `app\models\CnvCoordinadorConvenio`.
 */
class CnvCoordinadorConvenioSearch extends CnvCoordinadorConvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_COORDINADOR_CONVENIO', 'RUT_COORDINADOR_CONVENIO', 'NOMBRE_COORDINADOR_CONVENIO', 'FECHA_INICIO', 'FECHA_FIN', 'UNIDAD_ACADEMICA', 'EMAIL'], 'safe'],
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
        $query = CnvCoordinadorConvenio::find();

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
            'FECHA_INICIO' => $this->FECHA_INICIO,
            'FECHA_FIN' => $this->FECHA_FIN,
        ]);

        $query->andFilterWhere(['like', 'ID_COORDINADOR_CONVENIO', $this->ID_COORDINADOR_CONVENIO])
            ->andFilterWhere(['like', 'RUT_COORDINADOR_CONVENIO', $this->RUT_COORDINADOR_CONVENIO])
            ->andFilterWhere(['like', 'NOMBRE_COORDINADOR_CONVENIO', $this->NOMBRE_COORDINADOR_CONVENIO])
            ->andFilterWhere(['like', 'UNIDAD_ACADEMICA', $this->UNIDAD_ACADEMICA])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL]);

        return $dataProvider;
    }
}
