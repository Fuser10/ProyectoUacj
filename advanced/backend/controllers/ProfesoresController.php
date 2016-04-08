<?php

namespace backend\controllers;

use Yii;
use backend\models\Profesores;
use backend\models\ProfesoresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProfesoresController implements the CRUD actions for Profesores model.
 */
class ProfesoresController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Profesores models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProfesoresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Profesores model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Profesores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Profesores();

        if ($model->load(Yii::$app->request->post())) {


 $fileName = $model->nombre_completo;


if($model->file = UploadedFile::getInstance($model, 'file'))
{ 
$model->file->saveAs('imagenes/'.$fileName.'.'.$model->file->extension);

$model->foto = 'imagenes/'.$fileName.'.'.$model->file->extension;

}
 $model->save();

//prueba

            return $this->redirect(['view', 'id' => $model->profesor_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Profesores model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {


$fileName = $model->nombre_completo;

//if(!empty($model->file))

//
if($model->file = UploadedFile::getInstance($model, 'file'))
{ 
$model->file->saveAs('imagenes/'.$fileName.'.'.$model->file->extension);

$model->foto = 'imagenes/'.$fileName.'.'.$model->file->extension;

//}

 

}
$model->save();
            return $this->redirect(['view', 'id' => $model->profesor_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Profesores model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Profesores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profesores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionAvanzada()
    {
        $searchModel = new ProfesoresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('avanzada', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

        public function actionCompleta()
    {
        $searchModel = new ProfesoresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('completa', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Profesores::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
