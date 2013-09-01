<?php
/* @var $this DetalleCompraController */
/* @var $model DetalleCompra */

$this->breadcrumbs=array(
	'Detalle Compras'=>array('index'),
	$model->id_detalle_compra,
);

$this->menu=array(
	array('label'=>'List DetalleCompra', 'url'=>array('index')),
	array('label'=>'Create DetalleCompra', 'url'=>array('create')),
	array('label'=>'Update DetalleCompra', 'url'=>array('update', 'id'=>$model->id_detalle_compra)),
	array('label'=>'Delete DetalleCompra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_detalle_compra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleCompra', 'url'=>array('admin')),
);
?>

<h1>View DetalleCompra #<?php echo $model->id_detalle_compra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_detalle_compra',
		'cantidad',
		'costo_unitario',
		'fecha_vencimiento',
		'id_compra',
		'id_producto',
	),
)); ?>
