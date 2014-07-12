<?php
/* @var $this ClienteInmuebleController */
/* @var $model ClienteInmueble */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-inmueble-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id_cliente'); ?>
		<?php echo $form->textField($model,'cliente_id_cliente'); ?>
		<?php echo $form->error($model,'cliente_id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inmueble_id_inmueble'); ?>
		<?php echo $form->textField($model,'inmueble_id_inmueble'); ?>
		<?php echo $form->error($model,'inmueble_id_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ini'); ?>
		<?php echo $form->textField($model,'fecha_ini'); ?>
		<?php echo $form->error($model,'fecha_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visito'); ?>
		<?php echo $form->textField($model,'visito',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'visito'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->