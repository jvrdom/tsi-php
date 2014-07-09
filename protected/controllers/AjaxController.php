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
}