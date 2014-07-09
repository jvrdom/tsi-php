<?php
/* @var $this BusquedaController */
/* @var $model Busqueda */

$this->breadcrumbs=array(
	'Busquedas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Busqueda', 'url'=>array('index')),
	array('label'=>'Manage Busqueda', 'url'=>array('admin')),
);
?>

<h1>Create Busqueda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>