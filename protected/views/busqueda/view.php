<?php
/* @var $this BusquedaController */
/* @var $model Busqueda */

$this->breadcrumbs=array(
	'Busquedas'=>array('index'),
	$model->id_busqueda,
);

$this->menu=array(
	array('label'=>'List Busqueda', 'url'=>array('index')),
	array('label'=>'Create Busqueda', 'url'=>array('create')),
	array('label'=>'Update Busqueda', 'url'=>array('update', 'id'=>$model->id_busqueda)),
	array('label'=>'Delete Busqueda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_busqueda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Busqueda', 'url'=>array('admin')),
);
?>

<h1>View Busqueda #<?php echo $model->id_busqueda; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_busqueda',
		'precio',
		'superficie',
		'dormitorios',
		'baños',
		'direccion',
		'descripcion',
		'esPendiente',
	),
)); ?>
