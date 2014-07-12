<?php
/* @var $this ClienteInmuebleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cliente Inmuebles',
);

$this->menu=array(
	array('label'=>'Create ClienteInmueble', 'url'=>array('create')),
	array('label'=>'Manage ClienteInmueble', 'url'=>array('admin')),
);
?>

<h1>Cliente Inmuebles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
