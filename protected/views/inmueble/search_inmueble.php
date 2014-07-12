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
               'Apartamentos('.$cantApt.')',          
               array('ajax/filterApartamentos',),
               array(
                   'type'=>'POST',
                   'data' => array('type' => '2'),
                   'update'=>'#thumbnail-list',
                   'beforeSend' => 'function() {           
                     $("#modalLoading").addClass("modalLoading");
                    }',
                   'complete' => 'function(){
                     $("#modalLoading").removeClass("modalLoading");
                    }',
               ),
               array('id' => 'apt-link')
           );
          ?>
        </li>
        <li>
         <?php 
            echo CHtml::ajaxLink(
               'Casas('.$cantCasa.')',          
               array('ajax/filterCasas',),
               array(
                   'type'=>'POST',
                   'data' => array('type' => '1'),
                   'update'=>'#thumbnail-list',
                   'beforeSend' => 'function() {           
                     $("#modalLoading").addClass("modalLoading");
                    }',
                   'complete' => 'function(){
                     $("#modalLoading").removeClass("modalLoading");
                    }',
               ),
               array('id' => 'apt-casa')
           );
          ?>
        </li>
     </ul>
     <hr></hr>
     <ul class="nav nav-sidebar">
         <?php 
            foreach ($result as $key => $value) { ?>
               <li>
                  <?php
                     echo CHtml::ajaxLink(
                        $value,          
                        array('ajax/filterBarrios/',),
                        array(
                            'type'=>'POST',
                            'data' => array('barrio' => $value),
                            'update'=>'#thumbnail-list',
                            'beforeSend' => 'function() {           
                              $("#modalLoading").addClass("modalLoading");
                             }',
                            'complete' => 'function(){
                              $("#modalLoading").removeClass("modalLoading");
                             }',
                        ),
                        array('id' => 'apt-barrios')
                    );
                  ?>
               </li>
           <?php }
         ?>
     </ul>
     <hr></hr>
     <ul class="nav nav-sidebar alert-info">      
         <li>
            <?php
               echo CHtml::ajaxLink(
                  'Ingrese su consulta',          
                  array('busqueda/create/',),
                  array(
                      'type'=>'POST',
                      'update'=>'#thumbnail-list',
                      'beforeSend' => 'function() {           
                        $("#modalLoading").addClass("modalLoading");
                       }',
                      'complete' => 'function(){
                        $("#modalLoading").removeClass("modalLoading");
                       }',
                  ),
                  array('id' => 'apt-consulta')
              );
            ?>
         </li>
     </ul>
   </div>
   
   <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
      <?php 
         echo CHtml::openTag('div', array('class' => 'row-fluid row-thumb', 'id' => 'thumbnail-list'));
             $this->renderPartial('_ajaxInmueble', array('listInmueble' => $listInmueble));
         echo CHtml::closeTag('div');
      ?>
   </div>
   <div id="modalLoading"></div>
</div>
