<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_inmueble')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_inmueble),array('view','id'=>$data->id_inmueble)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_id_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_id_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_inmueble_id_tipo_inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_inmueble_id_tipo_inmueble); ?>
	<br />

	*/ ?>

</div>