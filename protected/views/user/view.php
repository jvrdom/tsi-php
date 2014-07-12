<div class="row">
   <?php
      $this->menu=array(
         array('label'=>'Update User','url'=>array('update','id'=>$model->id_usuario)),
         array('label'=>'Delete User','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'Are you sure you want to delete this item?')),
      );
   ?>
   <div class="col-md-7">
      <h1>Perfil Usuario: <?php echo $model->username; ?></h1>

      <?php $this->widget('booster.widgets.TbDetailView',array(
         'data'=>$model,
         'attributes'=>array(
               array('name' => 'id_usuario', 'label' => 'Identificador'),
               array('name' => 'username', 'label' => 'Nombre de Usuario'),
               array('name' => 'prueba', 'type' => 'raw', 'label' => 'Tipo de Usuario', 'value'=> $rol),
         ),
         )); 
      ?>
   </div>
</div>