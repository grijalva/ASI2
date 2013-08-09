<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */

$this->breadcrumbs=array(
	'Rol Formularios'=>array('index'),
	$model->id_rol_formulario_privilegio,
);

$this->menu=array(
	array('label'=>'List RolFormulario', 'url'=>array('index')),
	array('label'=>'Create RolFormulario', 'url'=>array('create')),
	array('label'=>'Update RolFormulario', 'url'=>array('update', 'id'=>$model->id_rol_formulario_privilegio)),
	array('label'=>'Delete RolFormulario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rol_formulario_privilegio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolFormulario', 'url'=>array('admin')),
);
?>

<h1>View RolFormulario #<?php echo $model->id_rol_formulario_privilegio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rol_formulario_privilegio',
		'id_formulario',
		'id_rol',
	),
)); ?>
