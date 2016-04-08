<?php

namespace backend\controllers;

use Yii;
use backend\models\Proyectos;
use backend\models\ProyectosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Html;

/**
 * ProyectosController implements the CRUD actions for Proyectos model.
 */
class ProyectosController extends Controller
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
     * Lists all Proyectos models.
     * @return mixed
     */

private function downloadFile($dir, $file, $extensions=[])
{
 //Si el directorio existe
 if (is_dir($dir))
 {
  //Ruta absoluta del archivo
  $path = $dir.$file;
  
  //Si el archivo existe
  if (is_file($path))
  {
   //Obtener información del archivo
   $file_info = pathinfo($path);
   //Obtener la extensión del archivo
   $extension = $file_info["extension"];
   
   if (is_array($extensions))
   {
    //Si el argumento $extensions es un array
    //Comprobar las extensiones permitidas
    foreach($extensions as $e)
    {
     //Si la extension es correcta
     if ($e === $extension)
     {
      //Procedemos a descargar el archivo
      // Definir headers
      $size = filesize($path);
      header("Content-Type: application/force-download");
      header("Content-Disposition: attachment; filename=$file");
      header("Content-Transfer-Encoding: binary");
      header("Content-Length: " . $size);
      // Descargar archivo
      readfile($path);
      //Correcto
      return true;
     }
    }
   }
   
  }
 }
 //Ha ocurrido un error al descargar el archivo
 return false;
}

public function actionDownload()
{
 if (Yii::$app->request->get("file"))
 {
  //Si el archivo no se ha podido descargar
  //downloadFile($dir, $file, $extensions=[])
  if (!$this->downloadFile("archivos/", Html::encode($_GET["file"]), ["pdf", "txt", "doc", "jpg"]))
  {
   //Mensaje flash para mostrar el error
   Yii::$app->session->setFlash("errordownload");
  }
 }
 
 return $this->render("download");
}



    public function actionIndex()
    {
        $searchModel = new ProyectosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Proyectos model.
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
     * Creates a new Proyectos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Proyectos();

        if ($model->load(Yii::$app->request->post())) {

$fileName = $model->nombre_proyecto;

if($model->file = UploadedFile::getInstance($model, 'file'))
{
$model->file->saveAs('archivos/'.$fileName.'.'.$model->file->extension);

$model->documento = 'archivos/'.$fileName.'.'.$model->file->extension;

}


 $model->save();

            return $this->redirect(['view', 'id' => $model->proyecto_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Proyectos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

 
$fileName = $model->nombre_proyecto;
//if(!empty($model->file))
//{

if($model->file = UploadedFile::getInstance($model, 'file'))
{
$model->file->saveAs('archivos/'.$fileName.'.'.$model->file->extension);

$model->documento = 'archivos/'.$fileName.'.'.$model->file->extension;
}
 $model->save();

            return $this->redirect(['view', 'id' => $model->proyecto_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Proyectos model.
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
     * Finds the Proyectos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Proyectos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */


 //   public function actionDownload()
   //    {
    //            $model = new Proyectos();
//
  //              $file ='@web/'.$model->documento;
//
  //              if(file_exists($file))
    //            {
      //           return Yii::$app->response->sendFile($file);
        //         exit;
          //      }
//}



    public function actionAvanzada()
    {
        $searchModel = new ProyectosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('avanzada', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCompleta()
    {
        $searchModel = new ProyectosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('completa', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
 
    protected function findModel($id)
    {
        if (($model = Proyectos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

