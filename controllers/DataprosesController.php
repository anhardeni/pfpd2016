<?php

namespace app\controllers;

use Yii;
use app\models\Datakeberatan2016;
use app\models\Datakeberatan2016Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataprosesController implements the CRUD actions for Datakeberatan2016 model.
 */
class DataprosesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Datakeberatan2016 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Datakeberatan2016Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Datakeberatan2016 model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Datakeberatan2016 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Datakeberatan2016();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Datakeberatan2016 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Datakeberatan2016 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }

    public function actionCetakt3($id)
    {
       
      
       $ttpermohonan = \app\models\Ttpermohonan::findOne($id);


       //var_dump($ttpermohonan-> l_bpj);
       //var_dump($ttpermohonan->noagendakantor);
       //var_dump($ttpermohonan->tglterimapermohonan);
     // die();
      //$ttpermohonan = \app\models\ Ttpermohonan::find()->where (['id'=>$id])->one();
      //$ttpermohonan = Ttpermohonan::find()->where ('id = id',[':id '=> $id])->one(); 
       $namapemeriksa = \app\models\Namapemeriksa::find()->where (['id'=>$ttpermohonan->created_by])->all();
       $daftarimportir = \app\models\Daftarimportir::find()->where (['id'=>$ttpermohonan->idpemohon])->all();

       // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/ttmohon.docx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        $OpenTBS->VarRef['xnoagendakantor']=$ttpermohonan -> noagendakantor;
        $OpenTBS->VarRef['xtglterimaper']= $ttpermohonan -> tglterimapermohonan;
        $OpenTBS->VarRef['xnosrtp']= $ttpermohonan -> nosuratpermohonan;
        $OpenTBS->VarRef['xtglsrtper']= $ttpermohonan-> tglsuratpermohonan;
        $OpenTBS->VarRef['xl_bpj']= $ttpermohonan -> l_bpj;
         $OpenTBS->VarRef['xl_billing']= $ttpermohonan -> l_billing;
         $OpenTBS->VarRef['xl_srtpernyta']= $ttpermohonan -> l_suratpernyataan;
         $OpenTBS->VarRef['xl_sptnp']= $ttpermohonan ->l_sptnp;
         $OpenTBS->VarRef['xl_spp']= $ttpermohonan ->l_spp;
        $OpenTBS->VarRef['xl_spsa']= $ttpermohonan -> l_spsa;
        $OpenTBS->VarRef['xl_penpabl']= $ttpermohonan -> l_penetapanpabeanlainnya;
        $OpenTBS->VarRef['xl_pib']= $ttpermohonan -> l_pib;
        $OpenTBS->VarRef['xl_invoice']= $ttpermohonan -> l_invoice;
        $OpenTBS->VarRef['xl_plist']= $ttpermohonan -> l_packinglist;
        $OpenTBS->VarRef['xl_awb_bl']= $ttpermohonan -> l_awb_bl;
        $OpenTBS->VarRef['xl_dokleng']= $ttpermohonan -> l_dokpelengkaplainnya;
        $OpenTBS->VarRef['xberkaslb']= $ttpermohonan -> berkaslengkapbenar;
          $OpenTBS->VarRef['xtmcreated_at']= $ttpermohonan -> created_at;

          $b1 = [];
          foreach($daftarimportir as $daftarimportirb1){
            $b1[] = [
           // 'id' => $ttpermohonanb1 -> id,
             'namaimp'=>$daftarimportirb1-> namaimp,
              //  'npwpimp'=>$daftarimportirb1-> npwpimp,
                    ];
                  }       
         $OpenTBS->MergeBlock('a11' ,$b1);

          $b1a = [];
          foreach($daftarimportir as $daftarimportirb1a){
            $b1a[] = [
           // 'id' => $ttpermohonanb1 -> id,
             'namaimp'=>$daftarimportirb1a-> namaimp,
              //  'npwpimp'=>$daftarimportirb1-> npwpimp,
                    ];
                  }       
         $OpenTBS->MergeBlock('a11a' ,$b1a);

        $b5 = [];
          foreach($namapemeriksa as $namapemeriksas){
            $b5[] = [
             'nip'=>$namapemeriksas-> nip,
                'nama'=>$namapemeriksas->nama,
                    ];
                  }
       
         $OpenTBS->MergeBlock('b4' ,$b5);


          $b5a = [];
          foreach($namapemeriksa as $namapemeriksa5a){
            $b5a[] = [
             'nip'=>$namapemeriksa5a-> nip,
                'nama'=>$namapemeriksa5a-> nama,
                    ];
                  }
       
         $OpenTBS->MergeBlock('b4a' ,$b5a);

       /**
        $data = [];
        foreach($kapal as $kapals){
            $data[] = [
                'kapal_nama'=> $kapals->kapal_nama,
                'kapal_neg'=>$kapals->kapal_neg,
                    ];
        }
         
         $OpenTBS->MergeBlock('data' ,$data);
         /**


          $b1 = [];
          foreach($agen as $agens){
            $b1[] = [
             'namaagen'=>$agens->namaagen
                    ];
                  }
       
         $OpenTBS->MergeBlock('b1' ,$b1);
         
         $b2 = [];
          foreach($negpelabuhan as $negpelabuhans){
            $b2[] = [
             'negarapelabuhan'=>$negpelabuhans->negarapelabuhan
                    ];
                  }
       
         $OpenTBS->MergeBlock('b2' ,$b2);
         
          $b5 = [];
          foreach($nippemeriksa as $nippemeriksas){
            $b5[] = [
             'nip'=>$nippemeriksas->nip,
                'nama'=>$nippemeriksas->nama
                    ];
                  }
       
         $OpenTBS->MergeBlock('b3' ,$b5);
         
      $b5 = [];
          foreach($nipatasan1 as $nipatasan1s){
            $b5[] = [
             'nip'=>$nipatasan1s->nip,
                'nama'=>$nipatasan1s->nama
                    ];
                  }
       
         $OpenTBS->MergeBlock('b4' ,$b5);
         
           $b5 = [];
          foreach($nipatasan2 as $nipatasan2s){
            $b5[] = [
             'nip'=>$nipatasan2s->nip,
                'nama'=>$nipatasan2s->nama
                    ];
                  }
       
         $OpenTBS->MergeBlock('b5' ,$b5);
        */
        // Output the result as a file on the server. You can change output file
       
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'export.docx'); // Also merges all [onshow] automatic fields.  
        exit;
         //return $this -> reload();
    }
    /**
     * Finds the Datakeberatan2016 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Datakeberatan2016 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Datakeberatan2016::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
