<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Profesores */

$this->title = 'Update Profesores: ' . $model->profesor_id;
$this->params['breadcrumbs'][] = ['label' => 'Profesores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->profesor_id, 'url' => ['view', 'id' => $model->profesor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profesores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
