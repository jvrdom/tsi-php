<?php
/* @var $this PortadaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Portadas',
);

$this->menu=array(
	array('label'=>'Create Portada', 'url'=>array('create')),
	array('label'=>'Manage Portada', 'url'=>array('admin')),
);
?>

<h1>Portadas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
