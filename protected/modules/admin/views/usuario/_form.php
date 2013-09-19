<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con un <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_usuario'); ?>
		<?php echo $form->textField($model,'nombre_usuario',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">  
                <?php echo $form->label($model,'password_repeat'); ?>    
                <?php echo $form->passwordField($model,'password_repeat',array('size'=>50,'maxlength'=>100)); ?>    
                <?php echo $form->error($model,'password_repeat'); ?> 
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id_empleado'); ?>
		<?php echo $form->dropDownList($model,'id_empleado', CHtml::listData(Empleado::model()->findAll(), 'id_empleado', 'nombres')); ?>
		<?php echo $form->error($model,'id_empleado'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id_rol'); ?>
		<?php echo $form->dropDownList($model,'id_rol', CHtml::listData(Rol::model()->findAll(), 'id_rol', 'nombre')); ?>
		<?php echo $form->error($model,'id_rol'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->