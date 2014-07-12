<?php
/* @var $this ClienteInmuebleController */
/* @var $model ClienteInmueble */

$this->breadcrumbs=array(
	'Cliente Inmuebles'=>array('index'),
	$model->id_cliente_inmueble,
);

$this->menu=array(
	array('label'=>'List ClienteInmueble', 'url'=>array('index')),
	array('label'=>'Create ClienteInmueble', 'url'=>array('create')),
	array('label'=>'Update ClienteInmueble', 'url'=>array('update', 'id'=>$model->id_cliente_inmueble)),
	array('label'=>'Delete ClienteInmueble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cliente_inmueble),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClienteInmueble', 'url'=>array('admin')),
);
?>

<h1>View ClienteInmueble #<?php echo $model->id_cliente_inmueble; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cliente_inmueble',
		'cliente_id_cliente',
		'inmueble_id_inmueble',
		'fecha_ini',
		'visito',
	),
)); ?>
