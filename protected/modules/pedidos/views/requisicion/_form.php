<?php
/* @var $this RequisicionController */
/* @var $model Requisicion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'requisicion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
		<div class="row">
		Fecha:
		<?php echo $form->dateField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div>
		<div class="row">
		Estado:
		<?php echo $form->textField($model,'estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div>
		<div class="row">
		Descripci&oacute;n:
		<?php echo $form->textArea($model,'descripcion',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
		</div>
		<div class="row">
		<?php //echo $form->textField($model,'id_usuario'); ?>
		<?php //echo $form->error($model,'id_usuario'); ?>
		
		Agencia:
		<?php echo $form->labelEx($model,'id_agencia'); ?>
		<?php echo $form->dropDownList($model, 'id_agencia',array(CHtml::listData(Agencia::model()->findAll(), 'id_agencia', 'nombre'))); ?>
		<?php echo $form->error($model,'id_agencia'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Requisicion' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->