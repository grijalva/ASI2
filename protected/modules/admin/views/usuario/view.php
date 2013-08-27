<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/rolFormulario"),
    $this->action->id,
	$model->id_usuario,
);

?>

<h1>Ver Usuario #<?php echo $model->id_usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuario',
		'nombre_usuario',
		'password',
		'estado',
		'id_empleado',
		'id_rol',
	),
)); ?>
