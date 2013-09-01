<?php
/* @var $this CotizacionController */
/* @var $model Cotizacion */

$this->breadcrumbs=array(
	'Cotizacions'=>array('index'),
	$model->id_cotizacion,
);

$this->menu=array(
	array('label'=>'List Cotizacion', 'url'=>array('index')),
	array('label'=>'Create Cotizacion', 'url'=>array('create')),
	array('label'=>'Update Cotizacion', 'url'=>array('update', 'id'=>$model->id_cotizacion)),
	array('label'=>'Delete Cotizacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cotizacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cotizacion', 'url'=>array('admin')),
);
?>

<h1>View Cotizacion #<?php echo $model->id_cotizacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cotizacion',
		'fecha',
		'tiempo_vigencia',
		'estado',
		'id_usuario',
		'id_proveedor',
	),
)); ?>
