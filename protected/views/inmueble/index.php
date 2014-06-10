<h1>Inmuebles</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'inmueble-grid',
'type' => 'striped',
'dataProvider'=>$dataProvider,
'template' => "{items}",
'columns'=>array(
      'nombre',
      'descripcion',
      'precio',
      'superficie',
      'dormitorios',
      /*
      'baños',
      'estado',
      'direccion_id_direccion',
      'tipo_inmueble_id_tipo_inmueble',
      */
),
)); ?>
