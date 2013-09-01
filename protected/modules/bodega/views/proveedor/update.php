<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_proveedor=>array('view','id'=>$model->id_proveedor),
);

?>

<h1>Actualizar Proveedor <?php echo $model->id_proveedor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>