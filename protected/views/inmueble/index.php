<?php
$this->breadcrumbs=array(
	'Inmuebles',
);

$this->menu=array(
array('label'=>'Create Inmueble','url'=>array('create')),
array('label'=>'Manage Inmueble','url'=>array('admin')),
);
?>

<h1>Inmuebles</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
