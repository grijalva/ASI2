<?php
/* @var $this CotizacionController */
/* @var $model Cotizacion */

$this->breadcrumbs=array(
	'Cotizacions'=>array('index'),
	$model->id_cotizacion=>array('view','id'=>$model->id_cotizacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cotizacion', 'url'=>array('index')),
	array('label'=>'Create Cotizacion', 'url'=>array('create')),
	array('label'=>'View Cotizacion', 'url'=>array('view', 'id'=>$model->id_cotizacion)),
	array('label'=>'Manage Cotizacion', 'url'=>array('admin')),
);
?>

<h1>Update Cotizacion <?php echo $model->id_cotizacion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>