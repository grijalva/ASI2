<?php
/* @var $this RolFormularioController */
/* @var $data RolFormulario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rol_formulario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rol_formulario), array('view', 'id'=>$data->id_rol_formulario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_formulario')); ?>:</b>
	<?php echo CHtml::encode($data->id_formulario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rol')); ?>:</b>
	<?php echo CHtml::encode($data->id_rol); ?>
	<br />


</div>