<div class="page-header"> 
	<h1>Viendo Consulta #<?php echo $model->id_busqueda; ?></h1>
</div>

<?php 
$this->widget('booster.widgets.TbDetailView',array(
      'data'=> $model,
      'attributes'=>array(
	  		 array('name' => 'descripcion', 'label' => 'Descripcion'),
	  		 array('name' => 'precio', 'label' => 'Precio'),
	  		 array('name' => 'superficie', 'label' => 'Superficie'),
	  		 array('name' => 'dormitorios', 'label' => 'Dormitorios'),
	  		 array('name' => 'baños', 'label' => 'Baños'),
	  		 array('name' => 'direccion', 'label' => 'Barrio'),
	  		 array('name' => 'pendiente', 'type' => 'raw', 'label' => 'Estado', 'value'=>'<strong><font color="red">Pendiente</font></strong>', 'visible'=>$model->esPendiente === '0'),
	       	 array('name' => 'pendiente', 'type' => 'raw', 'label' => 'Estado', 'value'=>'<strong><font color="green">Resuelto</font></strong>', 'visible'=>$model->esPendiente === '1'),
      ),
)); 
?>
