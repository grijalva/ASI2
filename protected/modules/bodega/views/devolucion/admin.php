<?php
/* @var $this DevolucionController */
/* @var $model Devolucion */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/".$model->tableName()),
    $this->action->id,
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#devolucion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Devoluciones</h1>


<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'devolucion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_devolucion',
		'fecha',
		'titulo',
		'id_usuario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
