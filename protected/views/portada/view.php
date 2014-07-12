<?php
/* @var $this PortadaController */
/* @var $model Portada */

$this->breadcrumbs=array(
	'Portadas'=>array('index'),
	$model->id_portada,
);

$this->menu=array(
	array('label'=>'List Portada', 'url'=>array('index')),
	array('label'=>'Create Portada', 'url'=>array('create')),
	array('label'=>'Update Portada', 'url'=>array('update', 'id'=>$model->id_portada)),
	array('label'=>'Delete Portada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_portada),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Portada', 'url'=>array('admin')),
);
?>

<h1>View Portada #<?php echo $model->id_portada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'portfch',
		'id_inmueble',
		'orden',
		'id_portada',
	),
)); ?>
