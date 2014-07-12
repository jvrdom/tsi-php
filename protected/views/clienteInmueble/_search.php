<?php
/* @var $this ClienteInmuebleController */
/* @var $model ClienteInmueble */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cliente_inmueble'); ?>
		<?php echo $form->textField($model,'id_cliente_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id_cliente'); ?>
		<?php echo $form->textField($model,'cliente_id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inmueble_id_inmueble'); ?>
		<?php echo $form->textField($model,'inmueble_id_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_ini'); ?>
		<?php echo $form->textField($model,'fecha_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visito'); ?>
		<?php echo $form->textField($model,'visito',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->