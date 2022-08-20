<?php

namespace app\controllers;

use app\models\TindakanM;
use app\models\TindakanMSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TindakanMController implements the CRUD actions for TindakanM model.
 */
class TindakanMController extends Controller
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
     * Lists all TindakanM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TindakanMSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TindakanM model.
     * @param int $tintakan_id Tintakan ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tintakan_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tintakan_id),
        ]);
    }

    /**
     * Creates a new TindakanM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TindakanM();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tintakan_id' => $model->tintakan_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TindakanM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tintakan_id Tintakan ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tintakan_id)
    {
        $model = $this->findModel($tintakan_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tintakan_id' => $model->tintakan_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TindakanM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tintakan_id Tintakan ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tintakan_id)
    {
        $this->findModel($tintakan_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TindakanM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tintakan_id Tintakan ID
     * @return TindakanM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tintakan_id)
    {
        if (($model = TindakanM::findOne(['tintakan_id' => $tintakan_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
