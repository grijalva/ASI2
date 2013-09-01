<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_producto), array('view', 'id'=>$data->id_producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marca')); ?>:</b>
	<?php echo CHtml::encode($data->id_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria_producto); ?>
	<br />


</div>