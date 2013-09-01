<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_producto=>array('view','id'=>$model->id_producto),
);


?>

<h1>Actualizar Producto <?php echo $model->id_producto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>