<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvLogin;

/**
 * CnvLoginSearch represents the model behind the search form about `app\models\CnvLogin`.
 */
class CnvLoginSearch extends CnvLogin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NOMBRE', 'APELLIDO_PATERNO', 'APELLIDO_MATERNO', 'RUT_USUARIO', 'CONTRASEÑA'], 'safe'],
            [['ROL', 'ID_USUARIO'], 'integer'],
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
        $query = CnvLogin::find();

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
            'ROL' => $this->ROL,
            'ID_USUARIO' => $this->ID_USUARIO,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE', $this->NOMBRE])
            ->andFilterWhere(['like', 'APELLIDO_PATERNO', $this->APELLIDO_PATERNO])
            ->andFilterWhere(['like', 'APELLIDO_MATERNO', $this->APELLIDO_MATERNO])
            ->andFilterWhere(['like', 'RUT_USUARIO', $this->RUT_USUARIO])
            ->andFilterWhere(['like', 'CONTRASEÑA', $this->CONTRASEÑA]);

        return $dataProvider;
    }
}
