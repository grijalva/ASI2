<?php
/* @var $this AjusteController */
/* @var $model Ajuste */

$this->breadcrumbs=array(
	'Ajustes'=>array('index'),
	$model->id_ajuste,
);

$this->menu=array(
	array('label'=>'Listar Ajustes', 'url'=>array('index')),
	array('label'=>'Nuevo Ajuste', 'url'=>array('create')),
	array('label'=>'Actulizar Ajuste', 'url'=>array('update', 'id'=>$model->id_ajuste)),
	array('label'=>'Borrar Ajuste', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ajuste),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Ajuste', 'url'=>array('admin')),
);
?>

<h1>View Ajuste #<?php echo $model->id_ajuste; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ajuste',
		'fecha',
		'tipo_ajuste',
		'descripcion',
		'id_usuario',
	),
)); ?>
