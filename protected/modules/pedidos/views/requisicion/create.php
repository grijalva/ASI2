<?php
/* @var $this RequisicionController */
/* @var $model Requisicion */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
);

?>

<h1>Create Requisicion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>