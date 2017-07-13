<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvEstadoConvenio;

/**
 * CnvEstadoConvenioSearch represents the model behind the search form about `app\models\CnvEstadoConvenio`.
 */
class CnvEstadoConvenioSearch extends CnvEstadoConvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ESTADO_CONVENIO'], 'integer'],
            [['NOMBRE_ESTADO_CONVENIO', 'DESCRIPCION', 'VIGENTE'], 'safe'],
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
        $query = CnvEstadoConvenio::find();

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
            'ID_ESTADO_CONVENIO' => $this->ID_ESTADO_CONVENIO,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE_ESTADO_CONVENIO', $this->NOMBRE_ESTADO_CONVENIO])
            ->andFilterWhere(['like', 'DESCRIPCION', $this->DESCRIPCION])
            ->andFilterWhere(['like', 'VIGENTE', $this->VIGENTE]);

        return $dataProvider;
    }
}
