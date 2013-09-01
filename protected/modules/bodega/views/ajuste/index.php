<?php
/* @var $this AjusteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ajustes',
);

$this->menu=array(
	array('label'=>'Nuevo Ajuste', 'url'=>array('create')),
	array('label'=>'Gestionar Ajustes', 'url'=>array('admin')),
);
?>

<h1>Ajustes</h1>

<fieldset>
    <b>ID ajuste:</b> 23<br>
    <b>Fecha:</b> 12/05/2013<br>
    <b>Tipo Ajuste:</b> Ajuste 1 <br>
	<b>Descripción:</b> Mercadería dañada <br>
	<b>ID Usuario:</b> Miguel Pérez <br>
</fieldset><br>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
