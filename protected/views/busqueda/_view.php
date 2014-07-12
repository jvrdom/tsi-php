<?php
/* @var $this BusquedaController */
/* @var $data Busqueda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_busqueda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_busqueda), array('view', 'id'=>$data->id_busqueda)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('superficie')); ?>:</b>
	<?php echo CHtml::encode($data->superficie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dormitorios')); ?>:</b>
	<?php echo CHtml::encode($data->dormitorios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baños')); ?>:</b>
	<?php echo CHtml::encode($data->baños); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('esPendiente')); ?>:</b>
	<?php echo CHtml::encode($data->esPendiente); ?>
	<br />

	*/ ?>

</div>