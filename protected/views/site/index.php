<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<div class="row">
   <div class="col-md-3">
     <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
     </ul>
   </div>
   
   <div class="col-md-9">
   <?php   
      echo CHtml::openTag('div', array('class' => 'row-fluid row-thumb', 'id' => 'thumbnail-list'));
         $this->widget(
         'booster.widgets.TbThumbnails',
         array(
           'dataProvider' => $listInmueble,
           'template' => "{items}\n{pager}",
           'itemView' => 'application.views.widgets._thumb',
         )
         );
      echo CHtml::closeTag('div');
   ?>
   </div>
</div>
