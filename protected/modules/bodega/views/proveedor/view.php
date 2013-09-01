<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_proveedor,
);

?>

<h1>Ver Proveedor #<?php echo $model->id_proveedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proveedor',
		'nombre',
		'direccion',
		'tel_contacto',
		'id_municipio',
	),
)); ?>
