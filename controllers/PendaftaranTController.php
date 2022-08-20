<?php

namespace app\controllers;

use app\models\PendaftaranT;
use app\models\PendaftaranTSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PendaftaranTController implements the CRUD actions for PendaftaranT model.
 */
class PendaftaranTController extends Controller
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
     * Lists all PendaftaranT models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PendaftaranTSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PendaftaranT model.
     * @param int $pendaftaran_id Pendaftaran ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($pendaftaran_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($pendaftaran_id),
        ]);
    }

    /**
     * Creates a new PendaftaranT model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PendaftaranT();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'pendaftaran_id' => $model->pendaftaran_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PendaftaranT model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $pendaftaran_id Pendaftaran ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($pendaftaran_id)
    {
        $model = $this->findModel($pendaftaran_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pendaftaran_id' => $model->pendaftaran_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PendaftaranT model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $pendaftaran_id Pendaftaran ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($pendaftaran_id)
    {
        $this->findModel($pendaftaran_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PendaftaranT model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $pendaftaran_id Pendaftaran ID
     * @return PendaftaranT the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pendaftaran_id)
    {
        if (($model = PendaftaranT::findOne(['pendaftaran_id' => $pendaftaran_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
