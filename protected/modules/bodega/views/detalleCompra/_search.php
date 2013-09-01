<?php
/* @var $this DetalleCompraController */
/* @var $model DetalleCompra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_detalle_compra'); ?>
		<?php echo $form->textField($model,'id_detalle_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_unitario'); ?>
		<?php echo $form->textField($model,'costo_unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_vencimiento'); ?>
		<?php echo $form->textField($model,'fecha_vencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_compra'); ?>
		<?php echo $form->textField($model,'id_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->