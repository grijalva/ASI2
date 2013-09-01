<?php
/* @var $this CotizacionController */
/* @var $data Cotizacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cotizacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cotizacion), array('view', 'id'=>$data->id_cotizacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_vigencia')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_vigencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_proveedor); ?>
	<br />


</div>