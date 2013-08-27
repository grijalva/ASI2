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

<h1>Ver Rol #<?php echo $model->id_rol; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rol',
		'nombre',
		'descripcion',
		'hora_inicio',
		'hora_fin',
	),
)); ?>
