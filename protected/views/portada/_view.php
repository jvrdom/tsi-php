<?php
/* @var $this PortadaController */
/* @var $data Portada */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_portada')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_portada), array('view', 'id'=>$data->id_portada)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portfch')); ?>:</b>
	<?php echo CHtml::encode($data->portfch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->id_inmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden')); ?>:</b>
	<?php echo CHtml::encode($data->orden); ?>
	<br />


</div>