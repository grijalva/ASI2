<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_producto,
);

?>

<h1>Ver Producto #<?php echo $model->id_producto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_producto',
		'nombre',
		'descripcion',
		'url',
		'id_marca',
		'id_categoria_producto',
	),
)); ?>
