<?php
/* @var $this Inventario1Controller */
/* @var $model Inventario1 */

$this->breadcrumbs=array(
	'Inventario1s'=>array('index'),
	$model->id_inventario=>array('view','id'=>$model->id_inventario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inventario1', 'url'=>array('index')),
	array('label'=>'Create Inventario1', 'url'=>array('create')),
	array('label'=>'View Inventario1', 'url'=>array('view', 'id'=>$model->id_inventario)),
	array('label'=>'Manage Inventario1', 'url'=>array('admin')),
);
?>

<h1>Update Inventario1 <?php echo $model->id_inventario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>