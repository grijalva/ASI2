<?php
/* @var $this DevolucionController */
/* @var $model Devolucion */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_devolucion=>array('view','id'=>$model->id_devolucion),
);


?>

<h1>Actualizar Devolucion <?php echo $model->id_devolucion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>