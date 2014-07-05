<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


		<?php echo $form->textFieldGroup($model,'id_cliente',array('class'=>'span5')); ?>

		<?php echo $form->textFieldGroup($model,'nombre',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldGroup($model,'email',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldGroup($model,'telefono',array('class'=>'span5')); ?>

		<?php echo $form->textFieldGroup($model,'direccion',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldGroup($model,'esPendiente',array('class'=>'span5')); ?>


	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>