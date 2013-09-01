<?php
/* @var $this Inventario1Controller */
/* @var $model Inventario1 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_inventario'); ?>
		<?php echo $form->textField($model,'id_inventario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_max'); ?>
		<?php echo $form->textField($model,'stock_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_min'); ?>
		<?php echo $form->textField($model,'stock_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ubicacion'); ?>
		<?php echo $form->textField($model,'id_ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_agencia'); ?>
		<?php echo $form->textField($model,'id_agencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
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