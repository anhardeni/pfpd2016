<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ttpermohonan;

/**
 * app\models\TtpermohonanSearch represents the model behind the search form about `app\models\Ttpermohonan`.
 */
 class TtpermohonanSearch extends Ttpermohonan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idpemohon', 'l_bpj', 'l_billing', 'l_suratpernyataan', 'l_sptnp', 'l_spp', 'l_spsa', 'l_penetapanpabeanlainnya', 'l_pib', 'l_invoice', 'l_packinglist', 'l_awb_bl', 'l_dokpelengkaplainnya', 'berkaslengkapbenar', 'created_by', 'updated_by'], 'integer'],
            [['noagendakantor', 'tglterimapermohonan', 'tgljatuhtempo', 'nosuratpermohonan', 'tglsuratpermohonan', 'created_at', 'updated_at'], 'safe'],
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
        $query = Ttpermohonan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tglterimapermohonan' => $this->tglterimapermohonan,
            'tgljatuhtempo' => $this->tgljatuhtempo,
            'idpemohon' => $this->idpemohon,
            'tglsuratpermohonan' => $this->tglsuratpermohonan,
            'l_bpj' => $this->l_bpj,
            'l_billing' => $this->l_billing,
            'l_suratpernyataan' => $this->l_suratpernyataan,
            'l_sptnp' => $this->l_sptnp,
            'l_spp' => $this->l_spp,
            'l_spsa' => $this->l_spsa,
            'l_penetapanpabeanlainnya' => $this->l_penetapanpabeanlainnya,
            'l_pib' => $this->l_pib,
            'l_invoice' => $this->l_invoice,
            'l_packinglist' => $this->l_packinglist,
            'l_awb_bl' => $this->l_awb_bl,
            'l_dokpelengkaplainnya' => $this->l_dokpelengkaplainnya,
            'berkaslengkapbenar' => $this->berkaslengkapbenar,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'noagendakantor', $this->noagendakantor])
            ->andFilterWhere(['like', 'nosuratpermohonan', $this->nosuratpermohonan]);

        return $dataProvider;
    }
}
