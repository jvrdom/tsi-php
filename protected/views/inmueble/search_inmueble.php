<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<div class="row">
   <div class="col-md-3 col-md-2 sidebar">
     <ul class="nav nav-sidebar">
        <li>
         <?php 
            echo CHtml::ajaxLink(
               'Apartamentos',          
               array('ajax/filterApartamentos',),
               array(
                   'type'=>'POST',
                   'data' => array('type' => '2'),
                   'update'=>'#thumbnail-list',
               )
           );
          ?>
        </li>
        <li>
         <?php 
            echo CHtml::ajaxLink(
               'Casas',          
               array('ajax/filterApartamentos',),
               array(
                   'type'=>'POST',
                   'data' => array('type' => '1'),
                   'update'=>'#thumbnail-list',
               )
           );
          ?>
        </li>
     </ul>
     <hr></hr>
     <ul class="nav nav-sidebar">
        <li><a href="#">Barrios</a></li>
        <li>
          
        </li>
     </ul>
     <hr></hr>
   </div>
   
   <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
      <?php 
         echo CHtml::openTag('div', array('class' => 'row-fluid row-thumb', 'id' => 'thumbnail-list'));
             $this->renderPartial('_ajaxInmueble', array('listInmueble' => $listInmueble));
         echo CHtml::closeTag('div');
      ?>
   </div>
   <div id="prueba"></div>
</div>
