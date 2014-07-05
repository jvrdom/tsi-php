<?php

$this->menu=array(
array('label'=>'Update Inmueble','url'=>array('update','id'=>$model->id_inmueble)),
array('label'=>'Delete Inmueble','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_inmueble),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="row">
   <div class="col-md-7">
      <h1>View Inmueble: <?php echo $model->nombre; ?></h1>

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
             array('name' => 'prueba', 'type' => 'raw', 'label' => 'Imágenes', 'value'=>'<a href="" data-toggle="modal" data-target="#modalImagenes">Ver más...</a>'),
      		/*'tipo_inmueble_id_tipo_inmueble',*/
      ),
      )); ?>
   </div>
   <div class="col-md-5" id="map-canvas" style="height:400px;"></div>
</div>

<div class="modal fade" id="modalImagenes">
  <div class="modal-dialog" style="margin-top:10%;">
      <div class="wrapper">
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <?php foreach ($listImagenes as $key => $value) { ?>
                           <li>
                              <img src="<?php echo Yii::app()->request->baseUrl; ?>/protected/modules/imageHandler/files/<?php echo $value->url;?>" />
                           </li>
                        <?php }?>
                    </ul>
                </div>

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
                <!--<p class="jcarousel-pagination">-->
                    
                </p>
            </div>
        </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
      var modelLatlong = <?php echo json_encode($modelDireccion->latlong) ?>;
      var accion = <?php echo json_encode($this->action->Id) ?>;
      var latlong = modelLatlong.replace (/\(|\)/g, '').split(',');
      var direccion = <?php echo json_encode($modelDireccion->direccion) ?>;
      var portadaFileName = <?php echo json_encode($portada) ?>;
      var barrio = <?php echo json_encode($modelDireccion->barrio) ?>;
</script>