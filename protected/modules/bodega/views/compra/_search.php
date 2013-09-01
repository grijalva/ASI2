<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_compra'); ?>
		<?php echo $form->textField($model,'id_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_factura'); ?>
		<?php echo $form->textField($model,'num_factura',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_compra'); ?>
		<?php echo $form->textField($model,'tipo_compra',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cotizacion'); ?>
		<?php echo $form->textField($model,'id_cotizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_pago'); ?>
		<?php echo $form->textField($model,'id_tipo_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_factura'); ?>
		<?php echo $form->textField($model,'id_tipo_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_impuesto'); ?>
		<?php echo $form->textField($model,'id_impuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_quedan'); ?>
		<?php echo $form->textField($model,'id_quedan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->