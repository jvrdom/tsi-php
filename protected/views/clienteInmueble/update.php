<?php
/* @var $this ClienteInmuebleController */
/* @var $model ClienteInmueble */

$this->breadcrumbs=array(
	'Cliente Inmuebles'=>array('index'),
	$model->id_cliente_inmueble=>array('view','id'=>$model->id_cliente_inmueble),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClienteInmueble', 'url'=>array('index')),
	array('label'=>'Create ClienteInmueble', 'url'=>array('create')),
	array('label'=>'View ClienteInmueble', 'url'=>array('view', 'id'=>$model->id_cliente_inmueble)),
	array('label'=>'Manage ClienteInmueble', 'url'=>array('admin')),
);
?>

<h1>Update ClienteInmueble <?php echo $model->id_cliente_inmueble; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>