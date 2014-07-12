<?php
    $this->widget(
	    'booster.widgets.TbExtendedGridView',
	    array(
	    'fixedHeader' => true,
	    'headerOffset' => 40,
	    // 40px is the height of the main navigation at bootstrap
	    'type' => 'striped',
	    'dataProvider' => $dataProvider,
	    'responsiveTable' => true,
	    'template' => "{items}",
	    'columns' => array(
			array(
			'name' => 'id_busqueda',
			'header' => '#',
			'htmlOptions' => array('style' => 'width: 60px')
			),
			array('name' => 'descripcion','header' => 'Descripción'),
			array('name' => 'precio','header' => 'Precio'),
			array('name' => 'superficie','header' => 'Superficie'),
			array('name' => 'dormitorios','header' => 'Dormitorios'),
			array('name' => 'baños','header' => 'Baños'),
			array('name' => 'direccion','header' => 'Barrio'),
			array('name' => 'tipo','header' => 'Tipo de Inmueble'), 
			array('class' => 'booster.widgets.TbToggleColumn',
				'toggleAction' => 'busqueda/toggle',
				'name' => 'esPendiente',
				'header' => 'Estado'
			),
			array(
	            'class'=>'booster.widgets.TbButtonColumn',
	            'template' => '{view}',
                'updateButtonUrl' => null,
                'deleteButtonUrl' => null,
        	),
	    ))
    );
?>