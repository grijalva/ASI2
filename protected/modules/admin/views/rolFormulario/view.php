<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/rolFormulario"),
    $this->action->id,
	$model->id_rol_formulario,
);

?>

<h1>Ver RolFormulario #<?php echo $model->id_rol_formulario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rol_formulario',
		'id_formulario',
		'id_rol',
	),
)); ?>
