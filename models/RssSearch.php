<?php

namespace vendor\kouosl\rssfeed\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\rssfeed\models\Rssfeed;

/**
 * RssSearch represents the model behind the search form of `vendor\kouosl\rssfeed\models\Rssfeed`.
 */
class RssSearch extends Rssfeed
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rss_no'], 'integer'],
            [['rss_adi', 'rss_aciklama', 'rss_link'], 'safe'],
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
        $query = Rssfeed::find();

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
            'rss_no' => $this->rss_no,
        ]);

        $query->andFilterWhere(['like', 'rss_adi', $this->rss_adi])
            ->andFilterWhere(['like', 'rss_aciklama', $this->rss_aciklama])
            ->andFilterWhere(['like', 'rss_link', $this->rss_link]);

        return $dataProvider;
    }
}
