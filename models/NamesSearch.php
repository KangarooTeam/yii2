<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Names;

/**
 * NamesSearch represents the model behind the search form of `app\models\Names`.
 */
class NamesSearch extends Names
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['a', 'asd', 'ng'], 'safe'],
            [['b', 'c', 'd', 'id'], 'integer'],
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
        $query = Names::find();

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
            'b' => $this->b,
            'c' => $this->c,
            'd' => $this->d,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'a', $this->a])
            ->andFilterWhere(['like', 'asd', $this->asd])
            ->andFilterWhere(['like', 'ng', $this->ng]);

        return $dataProvider;
    }
}
