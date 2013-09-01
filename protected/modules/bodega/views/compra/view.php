<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs=array(
	'Compras'=>array('index'),
	$model->id_compra,
);

$this->menu=array(
	array('label'=>'List Compra', 'url'=>array('index')),
	array('label'=>'Create Compra', 'url'=>array('create')),
	array('label'=>'Update Compra', 'url'=>array('update', 'id'=>$model->id_compra)),
	array('label'=>'Delete Compra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_compra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Compra', 'url'=>array('admin')),
);
?>

<h1>View Compra #<?php echo $model->id_compra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_compra',
		'num_factura',
		'fecha',
		'tipo_compra',
		'estado',
		'id_usuario',
		'id_cotizacion',
		'id_tipo_pago',
		'id_tipo_factura',
		'id_impuesto',
		'id_quedan',
		'id_proveedor',
	),
)); ?>
