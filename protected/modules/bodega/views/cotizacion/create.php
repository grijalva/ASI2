<?php
/* @var $this CotizacionController */
/* @var $model Cotizacion */

$this->breadcrumbs=array(
	'Cotizacions'=>array('index'),
	'Create',
);

?>

<h1>Crear Cotizacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>