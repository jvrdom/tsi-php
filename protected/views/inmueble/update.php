<?php
$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->id_inmueble=>array('view','id'=>$model->id_inmueble),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Inmueble','url'=>array('index')),
	array('label'=>'Create Inmueble','url'=>array('create')),
	array('label'=>'View Inmueble','url'=>array('view','id'=>$model->id_inmueble)),
	array('label'=>'Manage Inmueble','url'=>array('admin')),
	);
	?>

	<h1>Update Inmueble <?php echo $model->id_inmueble; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>