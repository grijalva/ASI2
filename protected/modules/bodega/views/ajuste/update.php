<?php
/* @var $this AjusteController */
/* @var $model Ajuste */

$this->breadcrumbs=array(
	'Ajustes'=>array('index'),
	$model->id_ajuste=>array('view','id'=>$model->id_ajuste),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Ajustes', 'url'=>array('index')),
	array('label'=>'Nuevo Ajuste', 'url'=>array('create')),
	array('label'=>'Vista Ajustes', 'url'=>array('view', 'id'=>$model->id_ajuste)),
	array('label'=>'Gestionar Ajustes', 'url'=>array('admin')),
);
?>

<h1>Update Ajuste <?php echo $model->id_ajuste; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>