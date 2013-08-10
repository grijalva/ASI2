<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-formulario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_rol'); ?>
		<?php echo $form->dropDownList($model, 'id_rol',CHtml::listData(Rol::model()->findAll(), 'id_rol', 'nombre')); ?>
		<?php echo $form->error($model,'id_rol'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'id_formulario'); ?>
		<?php echo $form->dropDownList($model, 'id_formulario',CHtml::listData(Formulario::model()->findAll(), 'id_formulario', 'nombre')); ?>
		<?php echo $form->error($model,'id_formulario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->