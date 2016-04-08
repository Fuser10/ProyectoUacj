<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Proyectos */

$this->title = $model->proyecto_id;
$this->params['breadcrumbs'][] = ['label' => 'Proyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->proyecto_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->proyecto_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'proyecto_id',
            'nombre_proyecto',
            'descripcion:ntext',
            'fecha_inicio',
            

             [
               'attribute' => 'fecha_terminacion',
               'label'=>'Fecha de terminacion',
           
             ],
            //'fecha_terminacion',
            //'profesor_id',         
            [
               'attribute' => 'profesores.nombre_completo',
               'label'=>'Profesor encargado',
           
             ],
           
             [
               'attribute' => 'cantidad_alumnos',
               'label'=>'cantidad de alumnos',
           
             ],
            //'cantidad_alumnos',
             [
               'attribute' => 'alumno1',
               'label'=>'alumno 1',
           
             ],
              [
               'attribute' => 'alumno2',
               'label'=>'alumno 2',
           
             ],
            //'alumno1',
           // 'alumno2',
               [
               'attribute' => 'estatus',
               'label'=>'estatus del proyecto',
           
             ],

           // 'estatus',
            'area',
          

     [
               'attribute' => 'sector.nombre_sector',
               'label'=>'Sector enfocado',
           
             ],


      [
               'attribute' => 'tipoSolucion.nombre_solucion',
               'label'=>'Tipo de Solucion',

             ],
     
     [
               'attribute' => 'lineaInvestigacion.nombre_linea',
               'label'=> 'Linea de investigacion',
             ],
    
          //   'sector_enfocado_id',
          //  'tipo_solucion_id',
          //  'linea_investigacion_id',
            'lenguajes_usados',
            'grado_estudios',
            'documento',
        ],
    ]) ?>

</div>
