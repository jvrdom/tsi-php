<?php

/**
 * This is the model class for table "inmueble".
 *
 * The followings are the available columns in table 'inmueble':
 * @property integer $id_inmueble
 * @property string $nombre
 * @property string $descripcion
 * @property string $precio
 * @property integer $superficie
 * @property string $dormitorios
 * @property integer $baños
 * @property string $estado
 * @property integer $direccion_id_direccion
 * @property integer $tipo_inmueble_id_tipo_inmueble
 *
 * The followings are the available model relations:
 * @property User[] $users
 * @property Cliente[] $clientes
 * @property Imagen[] $imagens
 * @property Direccion $direccionIdDireccion
 * @property TipoInmueble $tipoInmuebleIdTipoInmueble
 * @property Calendario[] $calendarios
 */
class Inmueble extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inmueble';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('direccion_id_direccion, tipo_inmueble_id_tipo_inmueble', 'required'),
			array('superficie, baños, direccion_id_direccion, tipo_inmueble_id_tipo_inmueble', 'numerical', 'integerOnly'=>true),
			array('nombre, precio, dormitorios, estado', 'length', 'max'=>45),
			array('descripcion', 'length', 'max'=>120),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_inmueble, nombre, descripcion, precio, superficie, dormitorios, baños, estado, direccion_id_direccion, tipo_inmueble_id_tipo_inmueble', 'safe', 'on'=>'search'),
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
			'users' => array(self::MANY_MANY, 'User', 'administra(inmueble_id_inmueble, user_id_usuario)'),
			'clientes' => array(self::MANY_MANY, 'Cliente', 'cliente_inmueble(inmueble_id_inmueble, cliente_id_cliente)'),
			'imagens' => array(self::HAS_MANY, 'Imagen', 'inmueble_id_inmueble'),
			'direccion' => array(self::BELONGS_TO, 'Direccion', 'direccion_id_direccion'),
			'tipoInmuebleIdTipoInmueble' => array(self::BELONGS_TO, 'TipoInmueble', 'tipo_inmueble_id_tipo_inmueble'),
			'calendarios' => array(self::MANY_MANY, 'Calendario', 'inmueble_calendario(inmueble_id_inmueble, calendario_id_calendario)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_inmueble' => 'Id Inmueble',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'precio' => 'Precio',
			'superficie' => 'Superficie',
			'dormitorios' => 'Dormitorios',
			'baños' => 'Baños',
			'estado' => 'Estado',
			'direccion_id_direccion' => 'Direccion',
			'tipo_inmueble_id_tipo_inmueble' => 'Tipo de Inmueble',
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

		$criteria->compare('id_inmueble',$this->id_inmueble);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('superficie',$this->superficie);
		$criteria->compare('dormitorios',$this->dormitorios,true);
		$criteria->compare('baños',$this->baños);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('direccion_id_direccion',$this->direccion_id_direccion);
		$criteria->compare('tipo_inmueble_id_tipo_inmueble',$this->tipo_inmueble_id_tipo_inmueble);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inmueble the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getPropertyTypes(){
    $models = TipoInmueble::model()->findAll();
    return Chtml::listData($models,'id_tipo_inmueble','nombre');
  }
}
