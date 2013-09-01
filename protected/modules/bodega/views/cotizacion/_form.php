<?php
/* @var $this CotizacionController */
/* @var $model Cotizacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cotizacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->dateField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo_vigencia'); ?>
		<?php echo $form->textField($model,'tiempo_vigencia'); ?>
		<?php echo $form->error($model,'tiempo_vigencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>
    
	<!--
	<div class="row">
	/**	<?php echo $form->labelEx($model,'id_usuario'); ?>
	*	<?php echo $form->textField($model,'id_usuario'); ?>
	*	<?php echo $form->error($model,'id_usuario'); ?>
	</div>
    -->
	
	------------------------------------------------------------------------------------------------------------------------------------------
	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->dropDownList($model,'id_proveedor',CHtml::listData(Proveedor::model()->findAll(),'id_proveedor','nombre')); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>
	<!--Esto es solo una simulacion, esto se borra luego de este sabado XD -->
	
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'tiempo_vigencia'); ?>
		<?php echo $form->error($model,'tiempo_vigencia'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'costo_unitario'); ?>
		<?php echo $form->textField($model,'tiempo_vigencia'); ?>
		<?php echo $form->error($model,'tiempo_vigencia'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Fecha Vencimiento'); ?>
		<?php echo $form->dateField($model,'tiempo_vigencia'); ?>
		<?php echo $form->error($model,'tiempo_vigencia'); ?>
	</div>
	<!--Termina la "simulacion" xD  -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->