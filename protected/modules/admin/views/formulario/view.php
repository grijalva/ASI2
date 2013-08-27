<?php
/* @var $this FormularioController */
/* @var $model Formulario */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_formulario,
);
/*
$this->menu=array(
	array('label'=>'List Formulario', 'url'=>array('index')),
	array('label'=>'Create Formulario', 'url'=>array('create')),
	array('label'=>'Update Formulario', 'url'=>array('update', 'id'=>$model->id_formulario)),
	array('label'=>'Delete Formulario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_formulario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formulario', 'url'=>array('admin')),
);*/
?>

<h1>Ver Formulario #<?php echo $model->id_formulario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_formulario',
		'nombre',
		'direccion',
		'descripcion',
		'padre_fk',
	),
)); ?>
