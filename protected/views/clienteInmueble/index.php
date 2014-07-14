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
			array('name' => 'inmueble_id_inmueble','header' => 'ID_INM'),
			array('name' => 'cliente_id_cliente','header' => 'ID_CLI'),
			array('name' => 'fecha_ini','header' => 'Fecha'),
			array('class' => 'booster.widgets.TbToggleColumn',
				'toggleAction' => 'clienteInmueble/toggle',
				'name' => 'visito',
				'header' => 'Visita'
			),
	    ))
    );
?>