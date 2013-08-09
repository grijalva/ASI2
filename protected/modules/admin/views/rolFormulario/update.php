<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */

$this->breadcrumbs=array(
	'Rol Formularios'=>array('index'),
	$model->id_rol_formulario_privilegio=>array('view','id'=>$model->id_rol_formulario_privilegio),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolFormulario', 'url'=>array('index')),
	array('label'=>'Create RolFormulario', 'url'=>array('create')),
	array('label'=>'View RolFormulario', 'url'=>array('view', 'id'=>$model->id_rol_formulario_privilegio)),
	array('label'=>'Manage RolFormulario', 'url'=>array('admin')),
);
?>

<h1>Update RolFormulario <?php echo $model->id_rol_formulario_privilegio; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>