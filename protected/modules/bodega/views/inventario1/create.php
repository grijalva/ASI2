<?php
/* @var $this Inventario1Controller */
/* @var $model Inventario1 */

$this->breadcrumbs=array(
	'Inventario1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inventario1', 'url'=>array('index')),
	array('label'=>'Manage Inventario1', 'url'=>array('admin')),
);
?>

<h1>Create Inventario1</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>