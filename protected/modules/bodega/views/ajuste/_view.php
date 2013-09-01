<?php
/* @var $this AjusteController */
/* @var $data Ajuste */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ajuste')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ajuste), array('view', 'id'=>$data->id_ajuste)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_ajuste')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_ajuste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />


</div>