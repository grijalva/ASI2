<?php
/* @var $this FormularioController */
/* @var $model Formulario */

$this->breadcrumbs=array(
	'Formularios'=>array('index'),
	$model->id_formulario=>array('view','id'=>$model->id_formulario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Formulario', 'url'=>array('index')),
	array('label'=>'Create Formulario', 'url'=>array('create')),
	array('label'=>'View Formulario', 'url'=>array('view', 'id'=>$model->id_formulario)),
	array('label'=>'Manage Formulario', 'url'=>array('admin')),
);
?>

<h1>Update Formulario <?php echo $model->id_formulario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>