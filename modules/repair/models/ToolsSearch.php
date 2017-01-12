<?php

namespace app\modules\repair\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\repair\models\Tools;

/**
 * ToolsSearch represents the model behind the search form about `app\modules\repair\models\Tools`.
 */
class ToolsSearch extends Tools
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'company_id', 'tooltype_id', 'department_id', 'use'], 'integer'],
            [['name', 'buy_date', 'picture', 'exp_date'], 'safe'],
            [['price'], 'number'],
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
        $query = Tools::find();

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
            'company_id' => $this->company_id,
            'tooltype_id' => $this->tooltype_id,
            'department_id' => $this->department_id,
            'price' => $this->price,
            'buy_date' => $this->buy_date,
            'exp_date' => $this->exp_date,
            'use' => $this->use,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}
