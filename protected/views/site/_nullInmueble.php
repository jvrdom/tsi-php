<?php
   $this->beginWidget(
      'booster.widgets.TbJumbotron',
      array(
         'htmlOptions' => array('class' => 'text-center', 'style' => 'height:500px;')
      )
   );
?>
<p style="margin-top:20%;">
   No tienes ningún inmueble ingresado! Es tu primera vez? Comienza ya.
   <?php echo CHtml::link('Ingresa Inmueble',array('inmueble/create')); ?>
   <!--<?php $image = CHtml::image(Yii::app()->baseUrl.'/images/prueba.gif');
   echo CHtml::link($image, array('inmueble/create'));?>-->
</p>  

<?php $this->endWidget();?>
