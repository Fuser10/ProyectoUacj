<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LineaInvestigacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Linea Investigacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="linea-investigacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Linea Investigacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'linea_id',
            'nombre_linea',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
