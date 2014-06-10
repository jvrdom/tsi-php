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
'data'=> $model,
'attributes'=>array(
		 array('name' => 'nombre', 'label' => 'Nombre'),
		 array('name' => 'descripcion', 'label' => 'Descripcion'),
		 array('name' => 'precio', 'label' => 'Precio'),
		 array('name' => 'superficie', 'label' => 'Superficie'),
		 array('name' => 'dormitorios', 'label' => 'Dormitorios'),
		 array('name' => 'baños', 'label' => 'Baños'),
		 array('name' => 'estado', 'label' => 'Estado'),
		/*'direccion_id_direccion',
		'tipo_inmueble_id_tipo_inmueble',*/
),
)); ?>
