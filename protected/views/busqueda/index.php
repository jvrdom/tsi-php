<?php
/* @var $this BusquedaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Busquedas',
);

$this->menu=array(
	array('label'=>'Create Busqueda', 'url'=>array('create')),
	array('label'=>'Manage Busqueda', 'url'=>array('admin')),
);
?>

<h1>Busquedas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
