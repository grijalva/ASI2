<?php
/* @var $this ReporteController */
/* @var $model Reporte */

$this->breadcrumbs=array(
	'Reportes'=>array('index'),
	$model->id_inventario=>array('view','id'=>$model->id_inventario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reporte', 'url'=>array('index')),
	array('label'=>'Create Reporte', 'url'=>array('create')),
	array('label'=>'View Reporte', 'url'=>array('view', 'id'=>$model->id_inventario)),
	array('label'=>'Manage Reporte', 'url'=>array('admin')),
);
?>

<h1>Update Reporte <?php echo $model->id_inventario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>