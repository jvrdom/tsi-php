<?php

/**
 * This is the model class for table "direccion".
 *
 * The followings are the available columns in table 'direccion':
 * @property integer $id_direccion
 * @property string $direccion
 * @property string $latlong
 * @property string $barrio
 *
 * The followings are the available model relations:
 * @property Inmueble[] $inmuebles
 */
class Direccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('direccion, latlong, barrio', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_direccion, direccion, latlong, barrio', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'inmuebles' => array(self::HAS_MANY, 'Inmueble', 'direccion_id_direccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_direccion' => 'Id Direccion',
			'direccion' => 'Direccion',
			'latlong' => 'Latlong',
			'barrio' => 'Barrio',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_direccion',$this->id_direccion);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('latlong',$this->latlong,true);
		$criteria->compare('barrio',$this->barrio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

   public function getBarrios(){
      return $barrios = array('Ciudad Vieja','Centro','Barrio Sur','Palermo','Parque Rodó','Punta Carretas',
                              'Pocitos','Buceo','Parque Batlle','Villa Dolores','Malvín','Malvín Norte','Punta Gorda',
                              'Carrasco','Carrasco Norte','Bañados de Carrasco','Maroñas','Parque Guaraní','Flor de Maroñas',
                              'Las Canteras','Punta de Rieles','Bella Italia','Jardines del Hipódromo','Ituzaingó','Unión','Villa Española',
                              'Mercado Modelo','Bolívar','Castro Castellanos','Cerrito de la Victoria','Las Acacias','Aires Puros','Casavalle',
                              'Barrio Borro','Piedras Blancas','Manga','Toledo Chico','Paso de las Duranas','Peñarol','Lavalleja','Villa del Cerro',
                              'Casabó','Pajas Blancas','La Paloma','Tomkinson','Rincón del Cerro','La Teja','Prado','Nueva Savona',
                              'Capurro','Bella Vista','Arroyo Seco','Aguada','Reducto','Atahualpa','Jacinto Vera','La Figurita','Larrañaga',
                              'La Blanqueada','Villa Muñoz','Goes','Retiro','La Comercial','Tres Cruces','Brazo Oriental','Sayago','Conciliación',
                              'Belvedere','Nuevo París','Tres Ombúes','Pueblo Victoria','Paso de la Arena','Los Bulevares','Santiago Vázquez',
                              'Colón Sureste','Abayubá','Colón Centro y Noreste','Lezica','Melilla','Villa García','Manga Rural','Manga');
   }
}
