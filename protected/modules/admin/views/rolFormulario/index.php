<?php
/* @var $this RolFormularioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rol Formularios',
);

$this->menu=array(
	array('label'=>'Create RolFormulario', 'url'=>array('create')),
	array('label'=>'Manage RolFormulario', 'url'=>array('admin')),
);
?>

<h1>Rol Formularios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
