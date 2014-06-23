
<?php


$this->menu=array(
	array('label'=>'Update Cliente', 'url'=>array('update', 'id'=>$model->id_cliente)),
	array('label'=>'Delete Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cliente),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="row">
   <div class="col-md-7">
      <h1>View Cliente: <?php echo $model->nombre; ?></h1>

      <?php $this->widget('booster.widgets.TbDetailView',array(
      'data'=> $model,
      'attributes'=>array(
      		 array('name' => 'id_cliente', 'label' => 'Cliente id'),
      		 array('name' => 'nombre', 'label' => 'Nombre'),
      		 array('name' => 'email', 'label' => 'Email'),
      		 array('name' => 'telefono', 'label' => 'Telefono'),
      		 array('name' => 'direccion', 'label' => 'Direccion'),
      		 array('name' => 'esPendiente', 'label' => 'Pendiente'),

      ),
      )); ?>
   </div>
   <div class="col-md-5" id="map-canvas" style="height:400px;"></div>
</div>