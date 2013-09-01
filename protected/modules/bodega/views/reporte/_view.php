<?php
/* @var $this ReporteController */
/* @var $data Reporte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inventario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_inventario), array('view', 'id'=>$data->id_inventario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_producto')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_max')); ?>:</b>
	<?php echo CHtml::encode($data->stock_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_min')); ?>:</b>
	<?php echo CHtml::encode($data->stock_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_ubicacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agencia')); ?>:</b>
	<?php echo CHtml::encode($data->id_agencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_proveedor); ?>
	<br />

	*/ ?>

</div>