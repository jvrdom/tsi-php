<?php
/* @var $this PortadaController */
/* @var $model Portada */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'portada-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'portfch'); ?>
		<?php echo $form->textField($model,'portfch'); ?>
		<?php echo $form->error($model,'portfch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_inmueble'); ?>
		<?php echo $form->textField($model,'id_inmueble'); ?>
		<?php echo $form->error($model,'id_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orden'); ?>
		<?php echo $form->textField($model,'orden'); ?>
		<?php echo $form->error($model,'orden'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->