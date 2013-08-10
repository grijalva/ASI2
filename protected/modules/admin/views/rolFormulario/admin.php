<?php
/* @var $this RolFormularioController */
/* @var $model RolFormulario */

$this->breadcrumbs=array(
	'Rol Formularios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RolFormulario', 'url'=>array('index')),
	array('label'=>'Create RolFormulario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rol-formulario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rol Formularios</h1>

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
	'id'=>'rol-formulario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_rol_formulario_privilegio',
		'id_formulario',
		'id_rol',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>