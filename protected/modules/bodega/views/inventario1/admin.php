<?php
/* @var $this Inventario1Controller */
/* @var $model Inventario1 */

$this->breadcrumbs=array(
	'Inventario1s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Inventario1', 'url'=>array('index')),
	array('label'=>'Create Inventario1', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inventario1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Inventario1s</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventario1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_inventario',
		'codigo_producto',
		'stock_max',
		'stock',
		'stock_min',
		'estado',
		/*
		'id_ubicacion',
		'id_unidad',
		'id_agencia',
		'id_producto',
		'id_proveedor',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
