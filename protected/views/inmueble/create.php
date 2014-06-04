<div class="row">
	
	<div class="col-md-7">
		<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>

	<div class="col-md-5">
		<div style="margin-bottom:10px;">
			<?php
				$this->widget(
		    	'booster.widgets.TbMenu',
				    array(
				    'type' => 'list',
				    'items' => array(
					    array(
						    'label' => 'List Inmueble',
						    'url' =>  array('index'),
						    'itemOptions' => array('class' => 'active')
					    ),

					    array('label' => 'Manage User', 'url' => array('admin')),
					    
					    )
				    )
		    );
			?>
		</div>
		<div id="map-canvas" style="height:400px;"></div>


	</div>
	
</div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=API_GOOGLE&sensor=true"></script>
<?php  
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile($baseUrl.'/js/gmaps.js', CClientScript::POS_END);
?>


