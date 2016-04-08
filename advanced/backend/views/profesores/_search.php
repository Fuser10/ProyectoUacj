<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProfesoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'profesor_id') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'nombre_completo') ?>

    <?= $form->field($model, 'tipo_profesor') ?>

    <?= $form->field($model, 'cubiculo') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'materias') ?>

    <?php // echo $form->field($model, 'primera_linea_investigacion') ?>

    <?php // echo $form->field($model, 'segunda_linea_investigacion') ?>

    <?php // echo $form->field($model, 'tercera_linea_investigacion') ?>

    <?php // echo $form->field($model, 'cuarta_linea_investigacion') ?>

    <?php // echo $form->field($model, 'redes_sociales') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
