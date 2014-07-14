<h1>View ClienteInmueble #<?php echo $model->cliente_id_cliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cliente_id_cliente',
		'inmueble_id_inmueble',
		'fecha_ini',
		'visito',
	),
)); ?>
