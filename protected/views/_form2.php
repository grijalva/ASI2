<?php
/* @var $this DetalleRequisicionController */
/* @var $model DetalleRequisicion */
/* @var $form CActiveForm */
		$model2= new DetalleRequisicion;
		$criteria=new CDbCriteria;
		$criteria->addCondition('id_agencia=:id_agencia');
		$criteria->params=array(':id_agencia'=>($model->id_agencia));
		$mdl = new Agencia;
		$mdl = Agencia::model()->find($criteria);
		
?>
<h2>
	Fecha: <?php echo $model->fecha; ?><br>
	Descripci&oacute;n: <?php echo $model->descripcion; ?><br>
	Agencia: <?php echo $mdl->nombre; ?><br>
</h2>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalle-requisicion-_form2-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model2); ?>

	<div class="row">
		<?php echo $form->labelEx($model2,'cantidad'); ?>
		<?php echo $form->textField($model2,'cantidad'); ?>
		<?php echo $form->error($model2,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'id_inventario'); ?>
		<?php echo $form->textField($model2,'id_inventario'); ?>
		<?php echo $form->error($model2,'id_inventario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'id_requisicion'); ?>
		<?php echo $form->textField($model2,'id_requisicion'); ?>
		<?php echo $form->error($model2,'id_requisicion'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->