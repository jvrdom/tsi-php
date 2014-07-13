<table align="center" border="0" cellpadding="0" cellspacing="0">
	<tr><td>
	<div id='wizard' class="swMain">
		<ul>
			<li>
        <a href="#step-1">
          <span class="stepNumber">1</span>
          <span class="stepDesc">
             Paso 1<br />
             <small>Ingrese su horario</small>
          </span>
        </a>
      </li>
			<li>
        <a href="#step-2">
          <span class="stepNumber">2</span>
          <span class="stepDesc">
             Paso 1<br />
             <small>Ingrese sus datos</small>
          </span>
        </a>
      </li>
       <li>
        <a href="#step-3">
          <span class="stepNumber">3</span>
          <span class="stepDesc">
             Paso 3<br />
             <small>Confirme sus datos</small>
          </span>
        </a>
      </li>		
    </ul>
    <div id="step-1">	
        <div id="calendar"></div>
    </div>
    <div id="step-2">
    		<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
      		'id'=>'cliente-form',
      		'type' => 'horizontal',
      	   'enableClientValidation'=>true,
      	      'clientOptions'=>array(
      	         'validateOnSubmit'=>true,
      	   ),
      	)); ?>

      	<p class="alert alert-info" style="text-align:center;"><span class="required">Nombre, Email</span> y <span class="required">Teléfono</span> son requeridos.</p>

      	<?php echo $form->errorSummary($modelCliente); ?>

      		<?php echo $form->textFieldGroup($modelCliente,'nombre',array('label' => 'Nombre','class'=>'span5','maxlength'=>45)); ?>

      		<?php echo $form->textFieldGroup($modelCliente,'email',array('label' => 'Email','class'=>'span5','maxlength'=>120)); ?>

      		<?php echo $form->textFieldGroup($modelCliente,'telefono',array('label' => 'Teléfono','class'=>'span5','maxlength'=>45)); ?>

      		<?php echo $form->textFieldGroup($modelCliente,'direccion',array('label' => 'Dirección','class'=>'span5')); ?>

      	<?php $this->endWidget(); ?>
    </div>
    <div id="step-3" style="text-align:center;">
        <p class="alert alert-danger" style="text-align:center;"><span>Por favor, confirme sus datos.</span></p>
    	    <h3>Fecha: <small><p id="fecha"></p></small></h3>
          <h3>Nombre: <small><p id="nombre"></p></small></h3>
          <h3>E-Mail: <small><p id="email"></p></small></h3>
          <h3>Teléfono: <small><p id="telefono"></p></small></h3>
          <h3>Dirección: <small><p id="direccion"></p></small></h3>
    </div>   
	</div>
  </td></tr>  
</table>

<script type="text/javascript">
  var id_inmueble = <?php echo json_encode($_REQUEST['id_inmueble']); ?>;
</script>
