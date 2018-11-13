<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cmodel;

/**
 * CmodelSearch represents the model behind the search form of `app\models\Cmodel`.
 */
class CmodelSearch extends Cmodel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'manufacturer_id', 'year'], 'integer'],
            [['name', 'color', 'regno', 'note', 'pic1', 'pic2'], 'safe'],
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
        $query = Cmodel::find();

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
            'manufacturer_id' => $this->manufacturer_id,
            'year' => $this->year,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'regno', $this->regno])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'pic1', $this->pic1])
            ->andFilterWhere(['like', 'pic2', $this->pic2]);

        return $dataProvider;
    }
}
