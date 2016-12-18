<?php

namespace app\controllers;

use Yii;
use app\models\Ttpermohonan;
use app\models\TtpermohonanSearch;
use app\models\Namapemeriksa;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TtpermohonanController implements the CRUD actions for Ttpermohonan model.
 */
class TtpermohonanController extends Controller
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
     * Lists all Ttpermohonan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TtpermohonanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ttpermohonan model.
     * @param integer $id
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
     * Creates a new Ttpermohonan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ttpermohonan();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ttpermohonan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
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
     * Deletes an existing Ttpermohonan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
        }

    
public function actionCetaktt($id)
    {
       
         //      $searchModel = new TtpermohonanSearch();
     //   $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
      
       // $ttpermohonan = Ttpermohonan::findOne($id);
      //$ttpermohonan = Ttpermohonan::find()->where (['id'=>$ttpermohonan->id])->one();
       $ttpermohonan = Ttpermohonan::find()->where ('id = id',[':id '=> $id])->one(); 
      //   var_dump(1);             
     //   $kapal = Kapal::find()->where (['kapal_id'=>$tmaster->idkapal])->all();
        
    //    $agen = Tagen::find()->where (['id'=>$tmaster->idagen])->all();
        
      //   $negpelabuhan = Tnegpelabuhan::find()->where (['idpel'=>$tmaster->idpelasal])->all();
         
        //  $nippemeriksa = Pegawai::find()->where (['id'=>$ttpermohonan->created_by] )->all();
          
           $namapemeriksa = Namapemeriksa::find()->where (['id'=>$ttpermohonan->created_by])->all();
         //    $nipatasan2 = Pegawai::find()->where (['nip'=>$tmaster->nipatasan2])->all();
         
        
        
        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/ttmohon.docx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
      

       // $OpenTBS->VarRef['xnoagendakantor']= $ttpermohonan -> noagendakantor;
       //  $OpenTBS->VarRef['xtglterimapermohonan']= $ttpermohonan -> tglterimapermohonan;
        // $OpenTBS->VarRef['xvoy']= $ttpermohonan -> voy;
       //  $OpenTBS->VarRef['xtglpeldatang']= $ttpermohonan -> tglpeldatang;
       //  $OpenTBS->VarRef['xjumlahkemasan']= $ttpermohonan -> jumlahkemasan;
       //  $OpenTBS->VarRef['xsatuan']= $ttpermohonan -> satuan;
       //  $OpenTBS->VarRef['xvolume']= $ttpermohonan ->volume;
      //   $OpenTBS->VarRef['xberat']= $ttpermohonan ->berat;
       //  $OpenTBS->VarRef['xbc11']= $ttpermohonan -> bc11;
        //$OpenTBS->VarRef['xtglbc11']= $ttpermohonan -> tglbc11;
         //$OpenTBS->VarRef['xbc12']= $ttpermohonan -> bc12;
         //$OpenTBS->VarRef['xtglbc12']= $ttpermohonan -> tglbc12;
        // $OpenTBS->VarRef['xbc13']= $ttpermohonan -> bc13;
        // $OpenTBS->VarRef['xtglbc13']= $ttpermohonan -> tglbc13;
         //$OpenTBS->VarRef['xlhpsp']= $ttpermohonan -> lhpsp;
       



          $b1 = [];
          foreach($ttpermohonan as $ttpermohonanb1){
            $b1[] = [
            'id' => $ttpermohonanb1 -> id,
             'noagendakantor'=>$ttpermohonanb1-> noagendakantor,
                'tglterimapermohonan'=>$ttpermohonanb1-> tglterimapermohonan,
                    ];
                  }
       
         $OpenTBS->MergeBlock('a11' ,$b1);

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
    }

    
    /**
     * Finds the Ttpermohonan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ttpermohonan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ttpermohonan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

 
       
           


     
    
    
}
