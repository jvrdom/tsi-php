<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'cliente-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="alert alert-info">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nombre',array('label' => 'Nombre','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup($model,'email',array('label' => 'Email','class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textFieldGroup($model,'telefono',array('label' => 'Telefono','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup($model,'direccion',array('label' => 'Direccion','class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'esPendiente',array('label' => 'Pendiente','class'=>'span5','maxlength'=>45)); ?>




<div class="form-actions pull-right">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear Cliente' : 'Save',
         'icon' => 'glyphicon glyphicon-home',
		)); ?>
</div>

<?php $this->endWidget(); ?>











