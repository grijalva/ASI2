<?php
/* @var $this AjusteController */
/* @var $model Ajuste */

$this->breadcrumbs=array(
	'Ajustes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Ajustes', 'url'=>array('index')),
	array('label'=>'Nuevo Ajuste', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ajuste-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Ajustes</h1>



<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ajuste-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_ajuste',
		'fecha',
		'tipo_ajuste',
		'descripcion',
		'id_usuario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


			
