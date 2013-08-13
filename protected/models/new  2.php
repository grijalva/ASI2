
<div class="row">
<?php echo $form->labelEx($model,'Asignar'); ?>
<?php echo $form->dropDownList($model,'Asignar',CHtml::listData(Empleado::model()->findAll(), 'Identificacion', 'Nombre'),array ('prompt'=>;'Seleccione...'));?>
<?php echo $form->error($model,'Asignar'); ?>
</div>
