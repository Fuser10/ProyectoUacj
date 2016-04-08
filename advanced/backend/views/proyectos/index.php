<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Proyectos;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use backend\models\Sector;
use backend\models\Profesores;
use backend\models\TipoSolucion;
use backend\models\LineaInvestigacion;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProyectosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proyectos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <br>

     <a class="btn btn-default" a href="<?= Url::toRoute("proyectos/avanzada") ?>">Busqueda avanzada </a>

     <a class="btn btn-default" a href="<?= Url::toRoute("proyectos/completa") ?>"> Busqueda completa </a>
     <br>

    <br>
    <p>
        <?= Html::a('Crear Proyectos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'proyecto_id',
            'nombre_proyecto',
            //'descripcion:ntext',
            'fecha_inicio',
            
                           [
               'attribute' => 'estatus',
               // 'value' => 'estatus',
               'label'=>'Estatus del proyecto',
                'filter'=>array("Asignado"=>"Asignado","Sin_Asignar"=>"Sin_Asignar","Terminado" => "Terminado"),
           
             ],
            // 'estatus',
            
 

       // [
           //    'attribute' => 'fecha_terminacion',
           //    'value' => 'fecha_terminacion',
            //   'label'=>'Fecha terminacion',
           
            // ],
           // 'fecha_terminacion',
            
                [
               'attribute' => 'profesor_id',
               'value' => 'profesores.nombre_completo',
               'label'=>'Profesor encargado',
                'filter' => Html::activeDropDownList($searchModel, 'profesor_id', ArrayHelper::map(Profesores::find()->asArray()->all(), 'profesor_id', 'nombre_completo'),['class'=>'form-control','prompt' => 'Busque profesor']),
             ],

            // 'profesor_id',

                [
               'attribute' => 'cantidad_alumnos',
               'value' => 'cantidad_alumnos',
               'label'=>'Cantidad Alumnos',
                'filter'=>array("0"=>"0","1"=>"1","2" => "2"),
           
             ],

           //  'cantidad_alumnos',
                  [
               'attribute' => 'alumno1',
               'value' => 'alumno1',
               'label'=>'Alumno1',
           
             ],

            // 'alumno1',
             
         [
               'attribute' => 'alumno2',
               'value' => 'alumno2',
               'label'=>'Alumno2',
           
             ],

           //  'alumno2',
             
         /*                                   [
               'attribute' => 'area',
               'label'=>'Area',      
             'filter'=>array("Desarrollo_de_software"=>"Desarrollo_de_software","Redes"=>"Redes","Bases_de_datos" => "Bases_de_datos", "Seguridad_informatica" => "Seguridad_informatica", "Otra" => "Otra"),
           
             ],
             //'area',
             [
                  'attribute' => 'sector_enfocado_id',
                 'value' => 'sector.nombre_sector',

                'filter' => Html::activeDropDownList($searchModel, 'sector_enfocado_id', ArrayHelper::map(Sector::find()->asArray()->all(), 'sector_id', 'nombre_sector'),['class'=>'form-control','prompt' => 'Busque sector']),
            
               'label'=>'Sector enfocado',
             ],


      [
               'attribute' => 'tipo_solucion_id',
               'value' => 'tipoSolucion.nombre_solucion',
               'label'=>'Tipo de Solucion',
                'filter' => Html::activeDropDownList($searchModel, 'tipo_solucion_id', ArrayHelper::map(TipoSolucion::find()->asArray()->all(), 'solucion_id', 'nombre_solucion'),['class'=>'form-control','prompt' => 'Busque Tipo de solucion']),

             ],
     
     [
               'attribute' => 'linea_investigacion_id',
               'value' => 'lineaInvestigacion.nombre_linea',
               'label'=> 'Linea de investigacion',
               'filter' => Html::activeDropDownList($searchModel, 'linea_investigacion_id', ArrayHelper::map(LineaInvestigacion::find()->asArray()->all(), 'linea_id', 'nombre_linea'),['class'=>'form-control','prompt' => 'Busque linea de investigacion']),

             ],
    

         
             'lenguajes_usados',

                              [
               'attribute' => 'grado_estudios',
               'label'=>'Grado de estudios',      
             'filter'=>array("Ingenieria"=>"Ingenieria","Maestria"=>"Maestria","Doctorado" => "Doctorado"),
           
             ],
          //   'grado_estudios',


    */
[
             'attribute'=>'documento',
             'label'=>'Documento',
             'format'=>'raw',
             'value'=>function($data)
             {
                   if($data->documento != null)
                   {
                   
                      return Html::a('Download', ["download"]);
          
                   }
                   else
                   {
                      return 'NA';
                   }
             },

            ],     

           // 'documento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
