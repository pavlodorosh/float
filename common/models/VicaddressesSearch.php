<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Vicaddresses;

/**
 * VicaddressesSearch represents the model behind the search form about `common\models\Vicaddresses`.
 */
class VicaddressesSearch extends Vicaddresses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['FLAT_TYPE', 'NUMBER_FIRST_PREFIX', 'NUMBER_FIRST_SUFFIX', 'NUMBER_LAST_PREFIX', 'NUMBER_LAST_SUFFIX', 'STREET_NAME', 'STREET_TYPE_CODE', 'LOCALITY_NAME', 'POSTCODE', 'LEGAL_PARCEL_ID', 'ADDRESS_DETAIL_PID', 'STREET_LOCALITY_PID'], 'safe'],
            [['FLAT_NUMBER', 'NUMBER_FIRST', 'NUMBER_LAST', 'LATITUDE', 'LONGITUDE'], 'number'],
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
        $query = Vicaddresses::find();

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
            'FLAT_NUMBER' => $this->FLAT_NUMBER,
            'NUMBER_FIRST' => $this->NUMBER_FIRST,
            'NUMBER_LAST' => $this->NUMBER_LAST,
            'LATITUDE' => $this->LATITUDE,
            'LONGITUDE' => $this->LONGITUDE,
        ]);

        $query->andFilterWhere(['like', 'FLAT_TYPE', $this->FLAT_TYPE])
            ->andFilterWhere(['like', 'NUMBER_FIRST_PREFIX', $this->NUMBER_FIRST_PREFIX])
            ->andFilterWhere(['like', 'NUMBER_FIRST_SUFFIX', $this->NUMBER_FIRST_SUFFIX])
            ->andFilterWhere(['like', 'NUMBER_LAST_PREFIX', $this->NUMBER_LAST_PREFIX])
            ->andFilterWhere(['like', 'NUMBER_LAST_SUFFIX', $this->NUMBER_LAST_SUFFIX])
            ->andFilterWhere(['like', 'STREET_NAME', $this->STREET_NAME])
            ->andFilterWhere(['like', 'STREET_TYPE_CODE', $this->STREET_TYPE_CODE])
            ->andFilterWhere(['like', 'LOCALITY_NAME', $this->LOCALITY_NAME])
            ->andFilterWhere(['like', 'POSTCODE', $this->POSTCODE])
            ->andFilterWhere(['like', 'LEGAL_PARCEL_ID', $this->LEGAL_PARCEL_ID])
            ->andFilterWhere(['like', 'ADDRESS_DETAIL_PID', $this->ADDRESS_DETAIL_PID])
            ->andFilterWhere(['like', 'STREET_LOCALITY_PID', $this->STREET_LOCALITY_PID]);

        return $dataProvider;
    }
}
