<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LineaInvestigacion */

$this->title = 'Update Linea Investigacion: ' . $model->linea_id;
$this->params['breadcrumbs'][] = ['label' => 'Linea Investigacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->linea_id, 'url' => ['view', 'id' => $model->linea_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="linea-investigacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
