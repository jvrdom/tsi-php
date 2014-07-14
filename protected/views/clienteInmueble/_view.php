<?php
/* @var $this ClienteInmuebleController */
/* @var $data ClienteInmueble */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inmueble_id_inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->inmueble_id_inmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ini')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visito')); ?>:</b>
	<?php echo CHtml::encode($data->visito); ?>
	<br />


</div>