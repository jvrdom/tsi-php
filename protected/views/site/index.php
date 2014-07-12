<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<div class="row">
   <?php if ($listInmueble->getData() != null ) {
      echo CHtml::openTag('div', array('class' => 'row-fluid row-thumb', 'id' => 'thumbnail-list'));
         $this->widget(
         'booster.widgets.TbThumbnails',
         array(
           'dataProvider' => $listInmueble,
           'template' => "{items}\n{pager}",
           'itemView' => 'application.views.widgets._thumbIndex',
         )
         );
      echo CHtml::closeTag('div');
   } else {
      echo $this->renderPartial('_nullInmueble');
   }
   ?>
</div>
