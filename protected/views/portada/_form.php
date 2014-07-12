<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'portada-form',
	'type' => 'horizontal',
   'enableClientValidation'=>true,
      'clientOptions'=>array(
         'validateOnSubmit'=>true,
   ),
)); ?>

<p class="alert alert-info" style="text-align:center;">Seleccione los inmuebles para la portada</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- -->
	<?php echo $form->datePickerGroup(
	$model,
	'portfch',
	array(
	'widgetOptions' => array(
	'options' => array(
	'language' => 'es',
	),
	),
	'wrapperHtmlOptions' => array(
	'class' => 'span5',
	),
	'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
	)
	); ?>
	<!-- -->	

	<?php echo $form->dateFieldGroup($model,'portfch',array('label' => 'Fecha2','class'=>'span5', 'maxlength'=>45, 'type'=>'date')); ?>

	<?php echo $form->textFieldGroup($model,'id_inmueble',array('label' => 'Inmueble','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup($model,'orden',array('label' => 'Orden','class'=>'span5','maxlength'=>45)); ?>

<div class="form-actions pull-right">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'success',
			'label'=>$model->isNewRecord ? 'Crear Portada' : 'Save',
         'icon' => 'glyphicon glyphicon-user',
		)); ?>
</div>	

<?php $this->endWidget(); ?>