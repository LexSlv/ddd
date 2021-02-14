<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fellows;

/**
 * FellowsSearch represents the model behind the search form of `app\models\Fellows`.
 */
class FellowsSearch extends Fellows
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'whois', 'research_interests', 'fellowship_period', 'email', 'photo_url'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Fellows::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'whois', $this->whois])
            ->andFilterWhere(['like', 'research_interests', $this->research_interests])
            ->andFilterWhere(['like', 'fellowship_period', $this->fellowship_period])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'photo_url', $this->photo_url]);

        return $dataProvider;
    }
}
