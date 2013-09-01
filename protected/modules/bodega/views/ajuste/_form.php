<?php
/* @var $this AjusteController */
/* @var $model Ajuste */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ajuste-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<input type="date" name="bday">
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_ajuste'); ?>
		<p>
               <select id = "myList">
               <option value = "1">Seleccione el tipo de ajuste...</option>
               <option value = "2">Ajuste 1</option>
               <option value = "3">Ajuste 2</option>
               <option value = "4">Ajuste 3</option>
             </select>
          </p>
		<?php echo $form->error($model,'tipo_ajuste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<p>
               <select id = "myList">
               <option value = "1">Elija un usuario...</option>
               <option value = "2">Usuario 1</option>
               <option value = "3">Usuario 2</option>
               <option value = "4">Usuario 3</option>
             </select>
          </p>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>
	-->
	
	<table border="2">
<tr>
<th>Producto</th>
<th>Existencia </th>
<th>Ajuste</th>
</tr>
<tr>
<td>Producto 1</td>
<td>100</td>
<td><input type="number" name="cantidad" min="1" max="500"></td>
</tr>
<tr>
<td>Producto 2</td>
<td>50</td>
<td><input type="number" name="cantidad" min="1" max="500"></td>
</tr>
</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->