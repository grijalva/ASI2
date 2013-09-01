<?php
/* @var $this CategoriaProductoController */
/* @var $data CategoriaProducto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria_producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_categoria_producto), array('view', 'id'=>$data->id_categoria_producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>