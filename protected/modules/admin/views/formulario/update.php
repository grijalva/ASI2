<?php
/* @var $this FormularioController */
/* @var $model Formulario */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_formulario,
);

?>

<h1>Actualizar Formulario <?php echo $model->id_formulario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>