<?php
/* @var $this DevolucionController */
/* @var $data Devolucion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_devolucion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_devolucion), array('view', 'id'=>$data->id_devolucion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />


</div>