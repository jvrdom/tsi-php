<div class="col-xs-4 col-md-2">
    <div class="thumbnail">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/protected/modules/imageHandler/files/<?php echo $data['url']?>" alt="">
        <div class="caption">
            <a href="<?php echo Yii::app()->baseUrl ?>/index.php/inmueble/<?php echo $data['inmueble']->id_inmueble ?>"><strong><?php echo $data['inmueble']->nombre ?></strong></a>
            <p><?php echo $data['inmueble']->descripcion ?></p>
            <span>
               <strong>Precio: </strong> </br>
               <?php echo $data['inmueble']->precio ?> pesos.
            </span>
        </div>
    </div>
</div>