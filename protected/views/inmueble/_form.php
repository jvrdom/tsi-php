<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'inmueble-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="alert alert-info">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nombre',array('label' => 'Nombre','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup($model,'descripcion',array('label' => 'Descripcion','class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textFieldGroup($model,'precio',array('label' => 'Precio','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup($model,'superficie',array('label' => 'Superficie','class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'dormitorios',array('label' => 'Dormitorios','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup($model,'baños',array('label' => 'Baños','class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'estado',array('label' => 'Estado','class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldGroup(Direccion::model(),'direccion',array('label' => 'Direccion','class'=>'span5','append' => '<span onclick="codeAddress()"class="glyphicon glyphicon-map-marker"></span>')); ?>
	<?php echo $form->hiddenField(Direccion::model(), 'latlong'); ?>
   <?php echo $form->hiddenField(Imagen::model(), 'url[]'); ?>
   <input type="hidden" id="portadaHidden" name="portada" value=""/>

	<?php echo $form->dropDownListGroup(
			$model,
			'tipo_inmueble_id_tipo_inmueble',
				array(
					'wrapperHtmlOptions' => array(
					'class' => 'span5',
				),
			'widgetOptions' => array(
				'data' => $model->getPropertyTypes(),
				)
			)
		); 
	?>

<div class="form-actions pull-right">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear Inmueble' : 'Save',
         'icon' => 'glyphicon glyphicon-home',
		)); ?>
</div>

<?php $this->endWidget(); ?>
