<?php

namespace app\controllers;

use Yii;
use app\models\Datakeberatan2016;
use app\models\Datakeberatan2016Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Datakeberatan2016Controller implements the CRUD actions for Datakeberatan2016 model.
 */
class Datakeberatan2016Controller extends Controller
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

    
    public function actionUpload()
        {
            $fileName = 'file';
            $uploadPath = 'uploads/';

            if (isset($_FILES[$fileName])) {
                $file = \yii\web\UploadedFile::getInstanceByName($fileName);

                //Print file data
                //print_r($file);

                if ($file->saveAs($uploadPath . '/' . $file->name)) {
                    //Now save file data to database

                    echo \yii\helpers\Json::encode($file);
                }
            }else{
                    return $this->render('upload');
                }
            

            return false;
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
