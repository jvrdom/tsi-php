<h1>Usuarios</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'user-grid',
'type' => 'striped',
'dataProvider'=>$dataProvider,
'template' => "{items}",
'columns' => $columns,
)); ?>