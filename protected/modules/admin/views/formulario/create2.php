<?php
/* @var $this FormularioController */
/* @var $model Formulario */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
);

?>

<h1>Crear Formulario</h1>

<?php echo $this->renderPartial('_form2', array('model'=>$model)); ?>