<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_rol,
);

?>

<h1>Actualizar Rol <?php echo $model->id_rol; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>