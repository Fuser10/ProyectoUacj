<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model backend\models\LineaInvestigacion */

$this->title = $model->linea_id;
$this->params['breadcrumbs'][] = ['label' => 'Linea Investigacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="linea-investigacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->linea_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->linea_id], [
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
            'linea_id',
            'nombre_linea',
        ],
    ]) ?>

</div>

<a class="btn btn-default" a href="<?= Url::toRoute("profesores/create") ?>">Regresar a Crear profesor </a>