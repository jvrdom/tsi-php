<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cliente), array('view', 'id'=>$data->id_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />


</div>