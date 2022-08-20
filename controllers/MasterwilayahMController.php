<?php

namespace app\controllers;

use app\models\MasterwilayahM;
use app\models\MasterwilayahMSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterwilayahMController implements the CRUD actions for MasterwilayahM model.
 */
class MasterwilayahMController extends Controller
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
     * Lists all MasterwilayahM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterwilayahMSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterwilayahM model.
     * @param int $id_ruangan Id Ruangan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_ruangan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ruangan),
        ]);
    }

    /**
     * Creates a new MasterwilayahM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterwilayahM();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_ruangan' => $model->id_ruangan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterwilayahM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_ruangan Id Ruangan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_ruangan)
    {
        $model = $this->findModel($id_ruangan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ruangan' => $model->id_ruangan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterwilayahM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_ruangan Id Ruangan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_ruangan)
    {
        $this->findModel($id_ruangan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterwilayahM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_ruangan Id Ruangan
     * @return MasterwilayahM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ruangan)
    {
        if (($model = MasterwilayahM::findOne(['id_ruangan' => $id_ruangan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
