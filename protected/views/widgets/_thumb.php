<div class="col-xs-6 col-md-4">
    <div class="thumbnail">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/protected/modules/imageHandler/files/<?php echo $data['url']?>" alt="">
        <div class="caption">
            <strong><?php echo $data['inmueble']->nombre ?></strong>
            <p><?php echo $data['inmueble']->descripcion ?></p>
            <span>
               <strong>Precio: </strong> </br>
               <?php echo $data['inmueble']->precio ?> pesos.
               <a href="<?php echo Yii::app()->baseUrl ?>/index.php/inmueble/<?php echo $data['inmueble']->id_inmueble ?>"  class="btn btn-success pull-right btn-thumb" role="button">Ver más</a>
            </span>
        </div>
    </div>
</div>