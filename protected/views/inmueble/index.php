<h1>Inmuebles</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'inmueble-grid',
'type' => 'striped',
'dataProvider'=>$dataProvider,
'template' => "{items}",
'columns' => $columns,
)); ?>
