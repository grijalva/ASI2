<?php
/* @var $this DevolucionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName()
);


?>

<h1>Devoluciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
