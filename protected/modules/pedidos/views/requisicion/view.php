<?php
/* @var $this RequisicionController */
/* @var $model Requisicion */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_requisicion,
);

$this->menu=array(
	array('label'=>'List Requisicion', 'url'=>array('index')),
	array('label'=>'Create Requisicion', 'url'=>array('create')),
	array('label'=>'Update Requisicion', 'url'=>array('update', 'id'=>$model->id_requisicion)),
	array('label'=>'Delete Requisicion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_requisicion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Requisicion', 'url'=>array('admin')),
);
?>

<h1>View Requisicion #<?php echo $model->id_requisicion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_requisicion',
		'fecha',
		'estado',
		'descripcion',
		'id_usuario',
		'id_agencia',
	),
)); ?>
