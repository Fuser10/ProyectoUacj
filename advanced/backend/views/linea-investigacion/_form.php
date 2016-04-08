<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LineaInvestigacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="linea-investigacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_linea')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
