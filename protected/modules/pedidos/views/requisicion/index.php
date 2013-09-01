<?php
/* @var $this RequisicionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	$this->module->id=>("/ASI2/".$this->module->id),
    $model->tableName(),
);

?>

<h1>Requisicions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
