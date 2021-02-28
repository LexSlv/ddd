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
            [['id', 'senior'], 'integer'],
            [['name_en', 'whois_en', 'research_interests_en', 'university_en', 'name_ru', 'whois_ru', 'research_interests_ru', 'university_ru', 'email', 'photo_url', 'fellowship_period'], 'safe'],
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
            'senior' => $this->senior,
        ]);

        $query->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'whois_en', $this->whois_en])
            ->andFilterWhere(['like', 'research_interests_en', $this->research_interests_en])
            ->andFilterWhere(['like', 'university_en', $this->university_en])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'whois_ru', $this->whois_ru])
            ->andFilterWhere(['like', 'research_interests_ru', $this->research_interests_ru])
            ->andFilterWhere(['like', 'university_ru', $this->university_ru])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'photo_url', $this->photo_url])
            ->andFilterWhere(['like', 'fellowship_period', $this->fellowship_period]);

        return $dataProvider;
    }
}
