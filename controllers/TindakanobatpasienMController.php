<?php

namespace app\controllers;

use app\models\TindakanobatpasienM;
use app\models\TindakanobatpasienMSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TindakanobatpasienMController implements the CRUD actions for TindakanobatpasienM model.
 */
class TindakanobatpasienMController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TindakanobatpasienM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TindakanobatpasienMSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TindakanobatpasienM model.
     * @param int $nama_pasien Nama Pasien
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nama_pasien)
    {
        return $this->render('view', [
            'model' => $this->findModel($nama_pasien),
        ]);
    }

    /**
     * Creates a new TindakanobatpasienM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TindakanobatpasienM();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nama_pasien' => $model->nama_pasien]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TindakanobatpasienM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $nama_pasien Nama Pasien
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nama_pasien)
    {
        $model = $this->findModel($nama_pasien);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nama_pasien' => $model->nama_pasien]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TindakanobatpasienM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $nama_pasien Nama Pasien
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nama_pasien)
    {
        $this->findModel($nama_pasien)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TindakanobatpasienM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $nama_pasien Nama Pasien
     * @return TindakanobatpasienM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nama_pasien)
    {
        if (($model = TindakanobatpasienM::findOne(['nama_pasien' => $nama_pasien])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
