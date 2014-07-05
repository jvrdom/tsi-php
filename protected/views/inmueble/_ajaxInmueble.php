<?php if ($listInmueble != null ) {
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
   } else {
      echo $this->renderPartial('_nullInmueble');
   }
?>