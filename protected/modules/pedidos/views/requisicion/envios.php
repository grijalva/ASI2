<?php
/* @var $this RequisicionController */
/* @var $model Requisicion */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
);


?>

<h1>Ver env&iacute;os aprobados</h1>
<h2>Confirmar recepci&oacute;n de productos</h2>

</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'requisicion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_envio',
		'fecha_envio',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
