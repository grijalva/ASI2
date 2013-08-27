<?php
/* @var $this RequisicionController */
/* @var $data Requisicion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_requisicion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_requisicion), array('view', 'id'=>$data->id_requisicion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agencia')); ?>:</b>
	<?php echo CHtml::encode($data->id_agencia); ?>
	<br />


</div>