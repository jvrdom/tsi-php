<?php
/* @var $this BusquedaController */
/* @var $model Busqueda */

$this->breadcrumbs=array(
	'Busquedas'=>array('index'),
	$model->id_busqueda=>array('view','id'=>$model->id_busqueda),
	'Update',
);

$this->menu=array(
	array('label'=>'List Busqueda', 'url'=>array('index')),
	array('label'=>'Create Busqueda', 'url'=>array('create')),
	array('label'=>'View Busqueda', 'url'=>array('view', 'id'=>$model->id_busqueda)),
	array('label'=>'Manage Busqueda', 'url'=>array('admin')),
);
?>

<h1>Update Busqueda <?php echo $model->id_busqueda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>