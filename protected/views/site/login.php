<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>

<div class="inner">
   <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
      'id'=>'login-form',
      'type' => 'horizontal',
      'enableClientValidation'=>true,
      'clientOptions'=>array(
         'validateOnSubmit'=>true,
      ),
   )); ?>

   <p class="alert alert-info" style="text-align: center;">Campos <span class="required">Usuario</span> y <span class="required">Password</span> son requeridos.</p>

   <?php echo $form->errorSummary($model); ?>

   <?php echo $form->textFieldGroup($model,'username',array('label' => 'Usuario','class'=>'span5','maxlength'=>45)); ?>

   <?php echo $form->passwordFieldGroup($model,'password',array('label' => 'Password','class'=>'span5','maxlength'=>120)); ?>

   <?php $this->widget('booster.widgets.TbButton', array(
         'buttonType'=>'submit',
         'context'=>'primary',
         'label'=> 'Iniciar Sesion',
         'icon' => 'glyphicon glyphicon-home',
         'htmlOptions' => array('class' => 'btn-block'),
      )); ?>
   

   <?php $this->endWidget(); ?>
</div>

