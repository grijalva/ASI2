<?php
/* @var $this RolFormularioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()=>("/ASI2/".$this->module->id."/rolFormulario"),
);

?>

<h1>Rol Formularios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
