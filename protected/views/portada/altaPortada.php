<h1>Portada</h1>

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'portada-form',
	'type' => 'horizontal',
)); ?>


	<?php $this->widget('booster.widgets.TbGridView',array(
	'id'=>'portada-grid',
	'type' => 'striped',
	'dataProvider'=>$dataProvider,
	'template' => "{items}",
	'selectableRows' => 2,
   	'columns' => $columns,
	)); ?>

	<div class="form-actions pull-right" style="margin:20px 0 0 0;">
	<?php $this->widget('booster.widgets.TbButton', array(
			'id'=>'btnPortada',
			'buttonType'=>'submit',
			'context'=>'success',
			'label'=>'Ingresar',
            'htmlOptions' => array(
                'data-toggle' => 'modal',
                'data-target' => '#myModal',                    
                'onClick' => Yii::app()->session['selectedIds'] = true,
            ),			
		)); ?>
	</div>

<?php $this->endWidget(); ?>

<script>
$( "#selectedIds_all" ).hide();
var contador = 0;
var topeGrilla = 6;

$( ".select-on-check" ).click(function(event) {
	if($("#"+event.target.id).is(':checked'))
		contador += 1;
	else
		contador -= 1;
});

$( "#btnPortada" ).click(function() {
	if(contador > topeGrilla){
        $.notify('Solo se puden ingresar ' + topeGrilla + ' inmuebles.', {
            globalPosition: 'right bottom',
            className: 'error'
        });		
		return(false);
	}
		
	else{
		return(true);
	}
		
});



</script>	