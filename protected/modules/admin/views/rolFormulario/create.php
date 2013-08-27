<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/rolFormulario"),
    $this->action->id,
);

$this->menu=array(
	array('label'=>'List RolFormulario', 'url'=>array('index')),
	array('label'=>'Manage RolFormulario', 'url'=>array('admin')),
);
?>

<h1>Crear Rol-Formulario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>