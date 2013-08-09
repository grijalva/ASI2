<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */

$this->breadcrumbs=array(
	'Rol Formularios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolFormulario', 'url'=>array('index')),
	array('label'=>'Manage RolFormulario', 'url'=>array('admin')),
);
?>

<h1>Create RolFormulario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>