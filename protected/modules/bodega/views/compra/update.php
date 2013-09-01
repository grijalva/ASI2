<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs=array(
	'Compras'=>array('index'),
	$model->id_compra=>array('view','id'=>$model->id_compra),
	'Update',
);

$this->menu=array(
	array('label'=>'List Compra', 'url'=>array('index')),
	array('label'=>'Create Compra', 'url'=>array('create')),
	array('label'=>'View Compra', 'url'=>array('view', 'id'=>$model->id_compra)),
	array('label'=>'Manage Compra', 'url'=>array('admin')),
);
?>

<h1>Update Compra <?php echo $model->id_compra; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>