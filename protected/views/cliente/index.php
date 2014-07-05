<h1>Clientes</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'cliente-grid',
'type' => 'striped',
'dataProvider'=>$dataProvider,
'template' => "{items}",
'columns' => $columns,
)); ?>