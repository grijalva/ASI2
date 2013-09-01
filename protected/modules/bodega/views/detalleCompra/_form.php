<?php
/* @var $this DetalleCompraController */
/* @var $model DetalleCompra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalle-compra-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costo_unitario'); ?>
		<?php echo $form->textField($model,'costo_unitario'); ?>
		<?php echo $form->error($model,'costo_unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_vencimiento'); ?>
		<?php echo $form->textField($model,'fecha_vencimiento'); ?>
		<?php echo $form->error($model,'fecha_vencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_compra'); ?>
		<?php echo $form->textField($model,'id_compra'); ?>
		<?php echo $form->error($model,'id_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
		<?php echo $form->error($model,'id_producto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->