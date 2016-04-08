<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use backend\models\LineaInvestigacion;

/* @var $this yii\web\View */
/* @var $model backend\models\Profesores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesores-form">
  <br>
    <br>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput(); ?>

    <?= $form->field($model, 'nombre_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_profesor')->dropDownList([ 'Tiempo_completo' => 'Tiempo completo', 'Tiempo_parcial' => 'Tiempo parcial', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cubiculo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'materias')->textInput(['maxlength' => true]) ?>

 <a class="btn btn-default" a href="<?= Url::toRoute("linea-investigacion/create") ?>">Crear Linea de Investigacion </a>




        <?= $form->field($model, 'primera_linea_investigacion')->dropDownList(
   ArrayHelper::map(LineaInvestigacion::find()->all(),'linea_id', 'nombre_linea'), ['prompt' => 'Seleccione la primera linea de investigacion']
     )?>

          <?= $form->field($model, 'segunda_linea_investigacion')->dropDownList(
   ArrayHelper::map(LineaInvestigacion::find()->all(),'linea_id', 'nombre_linea'), ['prompt' => 'Seleccione la segunda linea de investigacion']
     )?>

          <?= $form->field($model, 'tercera_linea_investigacion')->dropDownList(
   ArrayHelper::map(LineaInvestigacion::find()->all(),'linea_id', 'nombre_linea'), ['prompt' => 'Seleccione la tercera linea de investigacion']
     )?>

          <?= $form->field($model, 'cuarta_linea_investigacion')->dropDownList(
   ArrayHelper::map(LineaInvestigacion::find()->all(),'linea_id', 'nombre_linea'), ['prompt' => 'Seleccione la cuarta linea de investigacion']
     )?>

    <?= $form->field($model, 'redes_sociales')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
