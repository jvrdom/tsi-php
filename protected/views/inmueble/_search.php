<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id_inmueble',array('class'=>'span5')); ?>

		<?php echo $form->textFieldGroup($model,'nombre',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldGroup($model,'descripcion',array('class'=>'span5','maxlength'=>120)); ?>

		<?php echo $form->textFieldGroup($model,'precio',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldGroup($model,'superficie',array('class'=>'span5')); ?>

		<?php echo $form->textFieldGroup($model,'dormitorios',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldGroup($model,'baños',array('class'=>'span5')); ?>

		<?php echo $form->textFieldGroup($model,'estado',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldGroup($model,'direccion_id_direccion',array('class'=>'span5')); ?>

		<?php echo $form->textFieldGroup($model,'tipo_inmueble_id_tipo_inmueble',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
