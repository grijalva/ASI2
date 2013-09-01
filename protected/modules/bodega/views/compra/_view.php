<?php
/* @var $this CompraController */
/* @var $data Compra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_compra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_compra), array('view', 'id'=>$data->id_compra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_factura')); ?>:</b>
	<?php echo CHtml::encode($data->num_factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_compra')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_compra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cotizacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_cotizacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_pago')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_factura')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_impuesto')); ?>:</b>
	<?php echo CHtml::encode($data->id_impuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_quedan')); ?>:</b>
	<?php echo CHtml::encode($data->id_quedan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_proveedor); ?>
	<br />

	*/ ?>

</div>