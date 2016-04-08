<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Imagenes */

$this->title = 'Create Imagenes';
$this->params['breadcrumbs'][] = ['label' => 'Imagenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
  <br>
    <br>

<div class="imagenes-create">


    <h1><?= Html::encode($this->title) ?></h1>
  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
