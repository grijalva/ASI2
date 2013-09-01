<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/rolFormulario"),
    $this->action->id,
);

?>

<h1>Crear Rol-Formulario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>