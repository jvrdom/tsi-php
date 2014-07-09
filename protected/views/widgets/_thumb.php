<div class="col-xs-6 col-md-4">
    <div class="thumbnail">
        <?php foreach ($data['imagens'] as $key => $value) {
            if($value->esPortada === '1') {?>
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/protected/modules/imageHandler/files/<?php echo $value->url?>" alt="">
            <?php } ?>   
        <?php } ?>
        <div class="caption">
            <a href="<?php echo Yii::app()->baseUrl ?>/index.php/inmueble/<?php echo $data['id_inmueble'] ?>"><strong><?php echo $data['nombre'] ?></strong></a>
            <p><?php echo $data['descripcion'] ?></p>
            <span>
               <strong>Precio: </strong> </br>
               <?php echo $data['precio'] ?> pesos.
            </span>
        </div>
    </div>
</div>
