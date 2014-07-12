<table align="center" border="0" cellpadding="0" cellspacing="0">
	<tr><td>
	<div id='wizard' class="swMain">
		<ul>
  				<li><a href="#step-1">
                <span class="stepNumber">1</span>
                <span class="stepDesc">
                   Step 1<br />
                   <small>Step 1 description</small>
                </span>
            </a></li>
  				<li><a href="#step-2">
                <span class="stepNumber">2</span>
                <span class="stepDesc">
                   Step 2<br />
                   <small>Step 2 description</small>
                </span>
            </a></li>
            <li><a href="#step-3">
                <span class="stepNumber">3</span>
                <span class="stepDesc">
                   Step 3<br />
                   <small>Step 3 description</small>
                </span>
            </a></li>		
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
        <div id="step-3">
        	

        		<p id="fecha"></p>


        	
        </div>   
	</div>

        </td></tr>           
</table>

<script type="text/javascript">
	$(document).ready(function() {

    // page is now ready, initialize the calendar...

    
    	//  Wizard 1  	
  		$('#wizard').smartWizard({transitionEffect:'fade',onFinish:onFinishCallback});
    	//  Wizard 2
      function onFinishCallback(){
        alert('Finish Called');
      }     

    $('#calendar').fullCalendar({
        height: 400,
        defaultView: 'agendaWeek',
        weekends: false,
        header: {
				left: 'prev,next today',
				center: 'title',
				right: 'agendaWeek,agendaDay'
			},
		defaultDate: '2014-06-12',
			selectable: true,
			selectHelper: true,
			editable: true,
			select: function(start, end) {
				var title = 'Cita Agendada';
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end,
					};	
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
					$('#fecha').text(eventData.start);
				}
				$('#calendar').fullCalendar('unselect');
			},
    });   

    $('#cliente-form').css('visibility', 'visible'); 

});

</script>
