<?php

class AjaxController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

   public function actionFilterApartamentos(){
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
      $type = $_POST['type'];
      $criteria=new CDbCriteria;
      $criteria->addCondition('tipo_inmueble_id_tipo_inmueble = ' .$type,'AND');
      $listInmueble=new CActiveDataProvider('Inmueble', 
                                             array('criteria' => $criteria,
                                                   'pagination' => array('pageSize' => 10),
                                             ));
      
      $this->renderPartial('/inmueble/_ajaxInmueble',array('listInmueble' => $listInmueble));
   }
}