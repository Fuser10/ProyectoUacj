

<?php use yii\helpers\Url; ?>


<?php if (Yii::$app->session->hasFlash('errordownload')): ?>
<strong class="label label-danger">¡Ha ocurrido un error al descargar el archivo!</strong>

<?php else: ?>
<a href="<?= Url::toRoute(["proyectos/download", "file" => "Desarrollo_de_una aplicasion_emisora_de_localizacion_global_gps.pdf"]) ?>">Desarrollo de una aplicasion emisora de localizacion global gps</a>

<br> <br>

<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('errordownload')): ?>
<strong class="label label-danger">¡Ha ocurrido un error al descargar el archivo!</strong>

<?php else: ?>
<a href="<?= Url::toRoute(["proyectos/download", "file" => "Sitio_web_dinamico_de_subastas_en_tiempo_real.pdf"]) ?>">Sitio web dinamico de subastas en tiempo real</a>

<?php endif; ?>

<br><br>

<?php if (Yii::$app->session->hasFlash('errordownload')): ?>
<strong class="label label-danger">¡Ha ocurrido un error al descargar el archivo!</strong>

<?php else: ?>
<a href="<?= Url::toRoute(["proyectos/download", "file" => "pagina_interactiva_para_niños_de_3_a_6_años_de_edad.pdf"]) ?>">pagina interactiva para niños de 3 a 6 años de edad</a>

<?php endif; ?>

