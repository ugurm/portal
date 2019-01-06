<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Havadurumu;

/**
 * HavadurumuSearch represents the model behind the search form of `backend\models\Havadurumu`.
 */
class HavadurumuSearch extends Havadurumu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['illerid', 'servisid', 'imgid', 'favid', 'olcekc', 'roleid', 'olcekf'], 'integer'],
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
        $query = Havadurumu::find();

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
            'illerid' => $this->illerid,
            'servisid' => $this->servisid,
            'imgid' => $this->imgid,
            'favid' => $this->favid,
            'olcekc' => $this->olcekc,
            'roleid' => $this->roleid,
            'olcekf' => $this->olcekf,
        ]);

        return $dataProvider;
    }
}
