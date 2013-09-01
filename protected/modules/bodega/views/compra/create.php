<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs=array(
	'Compras'=>array('index'),
	'Create',
);

?>

<h1>Crear Compra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>