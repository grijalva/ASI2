<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compra-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

		<?php echo $form->errorSummary($model); ?><?php echo $form->labelEx($model,'num_factura'); ?>
		<?php echo $form->textField($model,'num_factura',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'num_factura'); ?>
		<div align="rigth">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->dateField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		<?php echo $form->labelEx($model,'tipo_compra'); ?>
		<?php echo $form->textField($model,'tipo_compra',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tipo_compra'); ?>
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div>

    <!--Estos son los los que van en dropDownList-->

	<!--<div class="row">
	/**	<?php echo $form->labelEx($model,'id_usuario'); ?>
	*	<?php echo $form->dropDownList($model,'id_usuario',CHtml::listData(Usuario::model()->findAll(),'id_usuario','nombre_usuario')); ?>
	*	<?php echo $form->error($model,'id_usuario'); ?>
	</div>-->

		<?php echo $form->labelEx($model,'id_cotizacion'); ?>
		<?php echo $form->dropDownList($model,'id_cotizacion',CHtml::listData(Cotizacion::model()->findAll(),'id_cotizacion','fecha')); ?>
		<?php echo $form->error($model,'id_cotizacion'); ?>

		<?php echo $form->labelEx($model,'id_tipo_pago'); ?>
		<?php echo $form->dropDownList($model,'id_tipo_pago',CHtml::listData(TipoPago::model()->findAll(),'id_tipo_pago','nombre')); ?>
		<?php echo $form->error($model,'id_tipo_pago'); ?>

		<?php echo $form->labelEx($model,'id_tipo_factura'); ?>
		<?php echo $form->dropDownList($model,'id_tipo_factura',CHtml::listData(Tipofactura::model()->findAll(),'id_tipo_factura','nombre')); ?>
		<?php echo $form->error($model,'id_tipo_factura'); ?>

		<?php echo $form->labelEx($model,'id_impuesto'); ?>
		<?php echo $form->dropDownList($model,'id_impuesto',CHtml::listData(Impuesto::model()->findAll(),'id_impuesto','tipo_impuesto')); ?>
		<?php echo $form->error($model,'id_impuesto'); ?>

		<?php echo $form->labelEx($model,'id_quedan'); ?>
		<?php echo $form->dropDownList($model,'id_quedan',CHtml::listData(Quedan::model()->findAll(),'id_quedan','numero_quedan')); ?>
		<?php echo $form->error($model,'id_quedan'); ?>

		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->dropDownList($model,'id_proveedor',CHtml::listData(Proveedor::model()->findAll(),'id_proveedor','nombre')); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	
	<!--Esto se borrara tambien XD -->

		<?php echo $form->labelEx($model,'Cantidad'); ?>
		<?php echo $form->textField($model,'id_proveedor',CHtml::listData(Proveedor::model()->findAll(),'id_proveedor','nombre')); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	 
		<?php echo $form->labelEx($model,'Costo_Unitario'); ?>
		<?php echo $form->textField($model,'id_proveedor',CHtml::listData(Proveedor::model()->findAll(),'id_proveedor','nombre')); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	 
		<?php echo $form->labelEx($model,'Fecha_Vencimiento'); ?>
		<?php echo $form->dateField($model,'id_proveedor',CHtml::listData(Proveedor::model()->findAll(),'id_proveedor','nombre')); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>

	 <!--Hasta aqui :c -->
	 
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->