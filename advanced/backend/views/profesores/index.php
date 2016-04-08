<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use backend\models\LineaInvestigacion;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProfesoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profesores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <br>

     <a class="btn btn-default" a href="<?= Url::toRoute("profesores/avanzada") ?>">Busqueda avanzada </a>

     <a class="btn btn-default" a href="<?= Url::toRoute("profesores/completa") ?>"> Busqueda completa </a>
     <br>

     <br>


    <p>
        <?= Html::a('Create Profesores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'profesor_id',
            
 [
     'attribute' => 'foto',
    'format' => 'image',
     'format' => ['image',['width'=>'180','height'=>'180']],
     'contentOptions' => ['width'=>'200','height'=>'200'],
    'value' => function ($model) {
        return $model->getImageUrl();


    },
],

            //'foto',
            'nombre_completo',
            
           
                           [
               'attribute' => 'tipo_profesor',
               'label'=>'Tipo de profesor',     
              'filter'=>array("Tiempo_completo"=>"Tiempo_completo","Tiempo_parcial"=>"Tiempo_parcial"),
           
             ],
           

           // 'tipo_profesor',
            'cubiculo',
            'correo:email',
            'celular',
            'materias',

/*

[
               'attribute' => 'primera_linea_investigacion',
               'value' => 'lineaInvestigacion.nombre_linea',
               'label'=> 'Primera linea de investigacion',
               'filter' => Html::activeDropDownList($searchModel, 'primera_linea_investigacion', ArrayHelper::map(LineaInvestigacion::find()->asArray()->all(), 'linea_id', 'nombre_linea'),['class'=>'form-control','prompt' => 'Busque linea de investigacion']),

             ],

    [
               'attribute' => 'segunda_linea_investigacion',
               'value' => 'lineaInvestigacion2.nombre_linea',
               'label'=> 'Segunda linea de investigacion',
               'filter' => Html::activeDropDownList($searchModel, 'segunda_linea_investigacion', ArrayHelper::map(LineaInvestigacion::find()->asArray()->all(), 'linea_id', 'nombre_linea'),['class'=>'form-control','prompt' => 'Busque linea de investigacion']),

             ],


 [
               'attribute' => 'tercera_linea_investigacion',
               'value' => 'lineaInvestigacion3.nombre_linea',
               'label'=> 'Tercera linea de investigacion',
               'filter' => Html::activeDropDownList($searchModel, 'tercera_linea_investigacion', ArrayHelper::map(LineaInvestigacion::find()->asArray()->all(), 'linea_id', 'nombre_linea'),['class'=>'form-control','prompt' => 'Busque linea de investigacion']),

             ],
 [
               'attribute' => 'cuarta_linea_investigacion',
               'value' => 'lineaInvestigacion4.nombre_linea',
               'label'=> 'Cuarta linea de investigacion',
               'filter' => Html::activeDropDownList($searchModel, 'cuarta_linea_investigacion', ArrayHelper::map(LineaInvestigacion::find()->asArray()->all(), 'linea_id', 'nombre_linea'),['class'=>'form-control','prompt' => 'Busque linea de investigacion']),

             ],
        
            // 'primera_linea_investigacion',
            //'segunda_linea_investigacion',
            // 'tercera_linea_investigacion',
           //  'cuarta_linea_investigacion',
         
             'redes_sociales:url',
*/
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
