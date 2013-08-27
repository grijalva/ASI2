<?php
/* @var $this RequisicionController */
/* @var $model Requisicion */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_requisicion=>array('view','id'=>$model->id_requisicion),
);

$this->menu=array(
	array('label'=>'List Requisicion', 'url'=>array('index')),
	array('label'=>'Create Requisicion', 'url'=>array('create')),
	array('label'=>'View Requisicion', 'url'=>array('view', 'id'=>$model->id_requisicion)),
	array('label'=>'Manage Requisicion', 'url'=>array('admin')),
);
?>

<h1>Update Requisicion <?php echo $model->id_requisicion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>