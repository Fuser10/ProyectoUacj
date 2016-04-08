<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Profesores */

$this->title = $model->profesor_id;
$this->params['breadcrumbs'][] = ['label' => 'Profesores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->profesor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->profesor_id], [
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
            

            'profesor_id',
            
[
    'attribute'=>'foto',
    'value'=>$model->getImageUrl(),
    'format' => ['image',['width'=>'200','height'=>'200']],
],

           // 'foto',
            'nombre_completo',
            'tipo_profesor',
            'cubiculo',
            'correo:email',
            'celular',
            'materias',

             [
               'attribute' => 'lineaInvestigacion.nombre_linea',
               'label'=> 'primera linea de investigacion',
             ],

               [
               'attribute' => 'lineaInvestigacion2.nombre_linea',
               'label'=> 'segunda linea de investigacion',
             ],
            
             [
               'attribute' => 'lineaInvestigacion3.nombre_linea',
               'label'=> 'tercera linea de investigacion',
             ],
            
             [
               'attribute' => 'lineaInvestigacion4.nombre_linea',
               'label'=> 'cuarta linea de investigacion',
             ],


           // 'primera_linea_investigacion',
            //'segunda_linea_investigacion',
           // 'tercera_linea_investigacion',
           // 'cuarta_linea_investigacion',
            'redes_sociales:url',
        ],
    ]) ?>

</div>
