<?php

namespace app\controllers;

use app\models\PegawaiM;
use app\models\PegawaiMSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PegawaiMController implements the CRUD actions for PegawaiM model.
 */
class PegawaiMController extends Controller
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
     * Lists all PegawaiM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PegawaiMSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PegawaiM model.
     * @param int $pegawai_id Pegawai ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($pegawai_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($pegawai_id),
        ]);
    }

    /**
     * Creates a new PegawaiM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PegawaiM();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'pegawai_id' => $model->pegawai_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PegawaiM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $pegawai_id Pegawai ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($pegawai_id)
    {
        $model = $this->findModel($pegawai_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pegawai_id' => $model->pegawai_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PegawaiM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $pegawai_id Pegawai ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($pegawai_id)
    {
        $this->findModel($pegawai_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PegawaiM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $pegawai_id Pegawai ID
     * @return PegawaiM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pegawai_id)
    {
        if (($model = PegawaiM::findOne(['pegawai_id' => $pegawai_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
