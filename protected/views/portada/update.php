<?php
/* @var $this PortadaController */
/* @var $model Portada */

$this->breadcrumbs=array(
	'Portadas'=>array('index'),
	$model->id_portada=>array('view','id'=>$model->id_portada),
	'Update',
);

$this->menu=array(
	array('label'=>'List Portada', 'url'=>array('index')),
	array('label'=>'Create Portada', 'url'=>array('create')),
	array('label'=>'View Portada', 'url'=>array('view', 'id'=>$model->id_portada)),
	array('label'=>'Manage Portada', 'url'=>array('admin')),
);
?>

<h1>Update Portada <?php echo $model->id_portada; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>