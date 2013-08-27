<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/rolFormulario"),
    $this->action->id,
	$model->id_rol_formulario=>array('view','id'=>$model->id_rol_formulario),
);

?>

<h1>Actualizar RolFormulario <?php echo $model->id_rol_formulario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>