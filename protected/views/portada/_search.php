<?php
/* @var $this PortadaController */
/* @var $model Portada */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'portfch'); ?>
		<?php echo $form->textField($model,'portfch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_inmueble'); ?>
		<?php echo $form->textField($model,'id_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orden'); ?>
		<?php echo $form->textField($model,'orden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_portada'); ?>
		<?php echo $form->textField($model,'id_portada'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->