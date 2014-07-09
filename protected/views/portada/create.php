<?php
/* @var $this PortadaController */
/* @var $model Portada */

$this->breadcrumbs=array(
	'Portadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Portada', 'url'=>array('index')),
	array('label'=>'Manage Portada', 'url'=>array('admin')),
);
?>

<h1>Create Portada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>