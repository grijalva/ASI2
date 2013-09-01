<?php
/* @var $this CategoriaProductoController */
/* @var $model CategoriaProducto */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
	$model->id_categoria_producto=>array('view','id'=>$model->id_categoria_producto),
);

?>

<h1>Actualizar Categoria Producto <?php echo $model->id_categoria_producto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>