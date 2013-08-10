<?php
/* @var $this FormularioController */
/* @var $data Formulario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_formulario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_formulario), array('view', 'id'=>$data->id_formulario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padre_fk')); ?>:</b>
	<?php echo CHtml::encode($data->padre_fk); ?>
	<br />


</div>