<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'cliente-form',
	'type' => 'horizontal',
   'enableClientValidation'=>true,
      'clientOptions'=>array(
         'validateOnSubmit'=>true,
   ),
)); ?>

<p class="alert alert-info" style="text-align:center;"><span class="required">Nombre, Email</span> y <span class="required">Teléfono</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nombre',array('label' => 'Nombre','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup($model,'email',array('label' => 'Email','class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textFieldGroup($model,'telefono',array('label' => 'Teléfono','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup($model,'direccion',array('label' => 'Dirección','class'=>'span5')); ?>

<div class="form-actions pull-right">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'success',
			'label'=>$model->isNewRecord ? 'Crear Cliente' : 'Save',
         'icon' => 'glyphicon glyphicon-user',
		)); ?>
</div>

<?php $this->endWidget(); ?>











