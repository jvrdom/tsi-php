<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
   'id'=>'inmueble-form',
   'type' => 'horizontal',
   'enableAjaxValidation'=>false,
   'enableClientValidation'=>true,
      'clientOptions'=>array(
         'validateOnSubmit'=>true,
   ),
)); ?>

<p class="alert alert-info" style="text-align: center;">Ingrese la información de consulta.</p>

<?php echo $form->errorSummary($model); ?>
   
   <?php echo $form->textAreaGroup($model,'descripcion',array('label' => 'Descripcion','class'=>'span5')); ?>

   <?php echo $form->textFieldGroup($model,'precio',array('label' => 'Precio','class'=>'span5','maxlength'=>45)); ?>

   <?php echo $form->textFieldGroup($model,'superficie',array('label' => 'Superficie','class'=>'span5')); ?>

   <?php echo $form->textFieldGroup($model,'dormitorios',array('label' => 'Dormitorios','class'=>'span5','maxlength'=>45)); ?>

   <?php echo $form->textFieldGroup($model,'baños',array('label' => 'Baños','class'=>'span5')); ?>

   <?php echo $form->textFieldGroup($model,'direccion',array('label' => 'Barrio','class'=>'span5')); ?>

   <?php echo $form->textFieldGroup($model,'tipo',array('label' => 'Tipo','class'=>'span5')); ?>

<div class="form-actions pull-right">
   <?php $this->widget('booster.widgets.TbButton', array(
         'buttonType'=>'submit',
         'context'=>'primary',
         'label'=>$model->isNewRecord ? 'Ingresar Búsqueda' : 'Save',
         'icon' => 'glyphicon glyphicon-search',
      )); ?>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
   if(barrio_content != null)
      document.getElementById('Busqueda_direccion').value = barrio_content;
   if(tipo_content != null)
      document.getElementById('Busqueda_tipo').value = tipo_content.substring( 0, tipo_content.indexOf( "(" ) );
</script>