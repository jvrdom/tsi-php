<?php

class AjaxController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

   public function actionFilterApartamentos(){
      sleep(2);
      $type = $_POST['type'];
      $criteria=new CDbCriteria;
      $criteria->addCondition('tipo_inmueble_id_tipo_inmueble = ' .$type,'AND');
      $listInmueble=new CActiveDataProvider('Inmueble', 
                                             array('criteria' => $criteria,
                                                   'pagination' => array('pageSize' => 10),
                                             ));
      
      $this->renderPartial('/inmueble/_ajaxInmueble',array('listInmueble' => $listInmueble));
   }

   public function actionFilterCasas(){
      sleep(2);
      $type = $_POST['type'];
      $criteria=new CDbCriteria;
      $criteria->addCondition('tipo_inmueble_id_tipo_inmueble = ' .$type,'AND');
      $listInmueble=new CActiveDataProvider('Inmueble', 
                                             array('criteria' => $criteria,
                                                   'pagination' => array('pageSize' => 10),
                                             ));
      
      $this->renderPartial('/inmueble/_ajaxInmueble',array('listInmueble' => $listInmueble));
   }

   public function actionFilterBarrios(){
      sleep(2);
      $barrio = $_POST['barrio'];
      $criteriaBarrios=new CDbCriteria;
      $criteriaBarrios->with = array('direccion' => array('condition' => 'direccion.barrio = :barrio',
                                                       'params' => array(':barrio' => $barrio)
                                                      ));
      $listInmueble=new CActiveDataProvider('Inmueble', 
                                             array('criteria' => $criteriaBarrios,
                                                   'pagination' => array('pageSize' => 10),
                                             ));
      $this->renderPartial('/inmueble/_ajaxInmueble',array('listInmueble' => $listInmueble));
   }


   public function actionCuotaHipotecaMensual() {
      
      $interes = $_POST['interes'];
      $meses = $_POST['meses'];
      $precio = $_POST['precio'];
      $resultado =  ($precio * ( 1 + ($interes / 100)) ) / $meses ;
      echo $resultado;

      Yii::app()->end();
   }

   public function actionPrueba(){
      
      $modelCliente = new Cliente;
      $modelCliente->nombre = $_POST['nombre'];
      $modelCliente->email = $_POST['email'];
      $modelCliente->telefono = $_POST['telefono'];
      $modelCliente->direccion = $_POST['direccion'];
      $modelCliente->esPendiente = 1;

      if($modelCliente->save()){
         $cliente_inmueble = new ClienteInmueble;
         $cliente_inmueble->cliente_id_cliente = $modelCliente->id_cliente;
         $cliente_inmueble->inmueble_id_inmueble = $_POST['id_inmueble'];
         $cliente_inmueble->fecha_ini = $_POST['fecha'];
         $cliente_inmueble->visito = 0;
         $cliente_inmueble->save();
      }
   }

}