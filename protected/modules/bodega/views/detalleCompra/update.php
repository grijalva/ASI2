<?php
/* @var $this DetalleCompraController */
/* @var $model DetalleCompra */

$this->breadcrumbs=array(
	'Detalle Compras'=>array('index'),
	$model->id_detalle_compra=>array('view','id'=>$model->id_detalle_compra),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleCompra', 'url'=>array('index')),
	array('label'=>'Create DetalleCompra', 'url'=>array('create')),
	array('label'=>'View DetalleCompra', 'url'=>array('view', 'id'=>$model->id_detalle_compra)),
	array('label'=>'Manage DetalleCompra', 'url'=>array('admin')),
);
?>

<h1>Update DetalleCompra <?php echo $model->id_detalle_compra; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>