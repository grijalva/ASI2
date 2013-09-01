<?php
/* @var $this DevolucionController */
/* @var $model Devolucion */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_devolucion,
);

?>

<h1>Ver Devolucion #<?php echo $model->id_devolucion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_devolucion',
		'fecha',
		'titulo',
		'id_usuario',
	),
)); ?>
