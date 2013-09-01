<?php
/* @var $this DetalleCompraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Compras',
);

$this->menu=array(
	array('label'=>'Create DetalleCompra', 'url'=>array('create')),
	array('label'=>'Manage DetalleCompra', 'url'=>array('admin')),
);
?>

<h1>Detalle Compras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
