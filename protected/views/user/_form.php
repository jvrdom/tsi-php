<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'user-form',
   'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="alert alert-info" style="text-align:center;">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'username',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->passwordFieldGroup($model,'password',array('class'=>'span5','maxlength'=>45)); ?>

   <?php echo $form->dropDownListGroup(
         AuthItem::model(),
         'name',
            array(
               'wrapperHtmlOptions' => array(
               'class' => 'span5',
            ),
         'widgetOptions' => array(
            'data' => $roles,
            )
         )
      ); 
   ?>

<div class="form-actions pull-right">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'success',
         'icon' => 'glyphicon glyphicon-user',
			'label'=>$model->isNewRecord ? 'Crear Usuario' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
