<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Profesores;
use backend\models\Sector;
use backend\models\TipoSolucion;
use backend\models\LineaInvestigacion;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Proyectos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectos-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nombre_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fecha_inicio')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
       // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
]);?>

      <?= $form->field($model, 'fecha_terminacion')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
       // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
]);?>


    <?= $form->field($model, 'profesor_id')->dropDownList(
   ArrayHelper::map(Profesores::find()->all(),'profesor_id', 'nombre_completo'), ['prompt' => 'Seleccione profesor']
     )?>


    <?= $form->field($model, 'estatus')->dropDownList([ 'Asignado' => 'Asignado', 'Sin_Asignar' => 'Sin Asignar', 'Terminado' => 'Terminado', ], ['prompt' => 'Seleccione un estatus']) ?>

    <?= $form->field($model, 'cantidad_alumnos')->dropDownList([ '0', '1', '2', ], ['prompt' => 'Seleccione cantidad de alumnos']) ?>

    <?= $form->field($model, 'alumno1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumno2')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'area')->dropDownList([ 'Desarrollo_de_software' => 'Desarrollo de software', 'Redes' => 'Redes', 'Bases_de_datos' => 'Bases de datos', 'Seguridad_informatica' => 'Seguridad informatica', 'Otra' => 'Otra', ], ['prompt' => 'Seleccione un area']) ?>


    <?= $form->field($model, 'sector_enfocado_id')->dropDownList(
   ArrayHelper::map(Sector::find()->all(),'sector_id', 'nombre_sector'), ['prompt' => 'Seleccione un sector']
     )?>

    <?= $form->field($model, 'tipo_solucion_id')->dropDownList(
   ArrayHelper::map(TipoSolucion::find()->all(),'solucion_id', 'nombre_solucion'), ['prompt' => 'Seleccione un tipo de solucion']
     )?>

        <?= $form->field($model, 'linea_investigacion_id')->dropDownList(
   ArrayHelper::map(LineaInvestigacion::find()->all(),'linea_id', 'nombre_linea'), ['prompt' => 'Seleccione una linea de investigacion']
     )?>

    <?= $form->field($model, 'lenguajes_usados')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grado_estudios')->dropDownList([ 'Ingenieria' => 'Ingenieria', 'Maestria' => 'Maestria', 'Doctorado' => 'Doctorado', ], ['prompt' => 'seleccione un grado de estudios']) ?>

    <?= $form->field($model, 'file')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
