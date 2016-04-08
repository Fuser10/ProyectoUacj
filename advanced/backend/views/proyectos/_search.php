<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProyectosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'proyecto_id') ?>

    <?= $form->field($model, 'nombre_proyecto') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fecha_inicio') ?>

    <?= $form->field($model, 'fecha_terminacion') ?>

    <?php // echo $form->field($model, 'profesor_id') ?>

    <?php // echo $form->field($model, 'cantidad_alumnos') ?>

    <?php // echo $form->field($model, 'alumno1') ?>

    <?php // echo $form->field($model, 'alumno2') ?>

    <?php // echo $form->field($model, 'estatus') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'sector_enfocado_id') ?>

    <?php // echo $form->field($model, 'tipo_solucion_id') ?>

    <?php // echo $form->field($model, 'linea_investigacion_id') ?>

    <?php // echo $form->field($model, 'lenguajes_usados') ?>

    <?php // echo $form->field($model, 'grado_estudios') ?>

    <?php // echo $form->field($model, 'documento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
