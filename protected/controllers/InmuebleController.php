<?php

class InmuebleController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
 * Sobrescribo el metodo init del controlador para que además carge el archivo js
 * de manejo de Gmaps.
 * @return void
 */
public function init() {
   $baseUrl = Yii::app()->baseUrl; 
   $cs = Yii::app()->getClientScript();
   $cs->registerScriptFile('http://maps.googleapis.com/maps/api/js?key=GMAPS_API&sensor=true');
   $cs->registerScriptFile($baseUrl.'/js/gmaps.js', CClientScript::POS_END);
   return parent::init();
}

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/
public function accessRules()
{
return array(
array('allow',  // allow all users to perform 'index' and 'view' actions
'actions'=>array('index','view'),
'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('create','update'),
'users'=>array('@'),
),
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('admin','delete'),
'users'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
   $modelInmueble = $this->loadModel($id);
   $modelDireccion = $this->loadDireccion($modelInmueble->direccion_id_direccion);
   $listImagenes = $this->loadImagenes($id);

   $this->render('view',array(
   'model'=>$modelInmueble,
   'modelDireccion'=>$modelDireccion,
   'listImagenes'=>$listImagenes,
   ));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
$model=new Inmueble;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Inmueble']))
{

$model->attributes=$_POST['Inmueble'];

$modelDireccion = new Direccion;
$modelDireccion->attributes=$_POST['Direccion'];

$array = json_decode($_POST['Imagen']['url'][0]);

if($modelDireccion->save()){
	$model->direccion_id_direccion = $modelDireccion->id_direccion;
	if ($model->save()){
      foreach ($array as $value) {
         # code...
         $modelImagen = new Imagen;
         $modelImagen->url = $value;
         $modelImagen->inmueble_id_inmueble = $model->id_inmueble;
         $modelImagen->save();
         unset($modelImagen);
      }
   }

   $this->redirect(array('view','id'=>$model->id_inmueble));
}

}

$this->render('create',array(
'model'=>$model,
));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Inmueble']))
{
$model->attributes=$_POST['Inmueble'];
if($model->save())
$this->redirect(array('view','id'=>$model->id_inmueble));
}

$this->render('update',array(
'model'=>$model,
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

/**
* Lists all models.
*/
public function actionIndex()
{
$dataProvider=new CActiveDataProvider('Inmueble');
$gridColumns = array(
   array('name'=>'nombre', 'header'=>'Nombre'),
   array('name'=>'descripcion', 'header'=>'Descripcion'),
   array('name'=>'precio', 'header'=>'Precio'),
   array('name'=>'superficie', 'header'=>'Superficie'),
   array('name'=>'baños', 'header'=>'Baños'),
   array('name'=>'dormitorios', 'header'=>'Dormitorios'),
   array('name'=>'estado', 'header'=>'Estado'),
   array(
      'htmlOptions' => array('nowrap'=>'nowrap'),
      'class'=>'booster.widgets.TbButtonColumn',
      'template' => '{view}',
      'updateButtonUrl'=>null,
      'deleteButtonUrl'=>null,
   )
);
$this->render('index',array(
'dataProvider'=>$dataProvider,
'columns' =>$gridColumns,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Inmueble('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Inmueble']))
$model->attributes=$_GET['Inmueble'];

$this->render('admin',array(
'model'=>$model,
));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=Inmueble::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='inmueble-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}

/**
 * Retorna la dirección de un inmueble.
 * @param  int $id Id del inmueble
 * @return Direccion Objeto dirección del inmueble.
 */
public function loadDireccion($id) {
   $modelDireccion = Direccion::model()->findByPk($id);
   if($modelDireccion===null) 
      throw new CHttpException(404,'The requested page does not exist.');
   return $modelDireccion;
}

public function loadImagenes($id) {
   //$imagenes = Imagen::model()->findAll(array('condition' => 'inmueble_id_inmueble => $id'));
   $imagenes = Imagen::model()->findAllByAttributes(array('inmueble_id_inmueble' => $id));
   if($imagenes===null) 
      throw new CHttpException(404,'The requested page does not exist.');
   return $imagenes;
}

}
