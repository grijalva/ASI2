<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_rol_formulario_privilegio'); ?>
		<?php echo $form->textField($model,'id_rol_formulario_privilegio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_formulario'); ?>
		<?php echo $form->textField($model,'id_formulario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rol'); ?>
		<?php echo $form->textField($model,'id_rol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->