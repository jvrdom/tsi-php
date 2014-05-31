<?php
$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->id_inmueble,
);

$this->menu=array(
array('label'=>'List Inmueble','url'=>array('index')),
array('label'=>'Create Inmueble','url'=>array('create')),
array('label'=>'Update Inmueble','url'=>array('update','id'=>$model->id_inmueble)),
array('label'=>'Delete Inmueble','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_inmueble),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Inmueble','url'=>array('admin')),
);
?>

<h1>View Inmueble #<?php echo $model->id_inmueble; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_inmueble',
		'nombre',
		'descripcion',
		'precio',
		'superficie',
		'dormitorios',
		'baños',
		'estado',
		/*'direccion_id_direccion',
		'tipo_inmueble_id_tipo_inmueble',*/
),
)); ?>
