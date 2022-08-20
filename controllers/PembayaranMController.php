<?php

namespace app\controllers;

use app\models\PembayaranM;
use app\models\PembayaranMSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PembayaranMController implements the CRUD actions for PembayaranM model.
 */
class PembayaranMController extends Controller
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
     * Lists all PembayaranM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PembayaranMSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PembayaranM model.
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
     * Creates a new PembayaranM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PembayaranM();

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
     * Updates an existing PembayaranM model.
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
     * Deletes an existing PembayaranM model.
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
     * Finds the PembayaranM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $nama_pasien Nama Pasien
     * @return PembayaranM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nama_pasien)
    {
        if (($model = PembayaranM::findOne(['nama_pasien' => $nama_pasien])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
