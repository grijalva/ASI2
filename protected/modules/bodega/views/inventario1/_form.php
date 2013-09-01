<?php
/* @var $this Inventario1Controller */
/* @var $model Inventario1 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventario1-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'codigo_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_max'); ?>
		<?php echo $form->textField($model,'stock_max'); ?>
		<?php echo $form->error($model,'stock_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_min'); ?>
		<?php echo $form->textField($model,'stock_min'); ?>
		<?php echo $form->error($model,'stock_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ubicacion'); ?>
		<?php echo $form->textField($model,'id_ubicacion'); ?>
		<?php echo $form->error($model,'id_ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
		<?php echo $form->error($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_agencia'); ?>
		<?php echo $form->textField($model,'id_agencia'); ?>
		<?php echo $form->error($model,'id_agencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
		<?php echo $form->error($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor'); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->