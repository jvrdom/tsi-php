<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id_cliente
 * @property string $nombre
 * @property string $email
 * @property string $telefono
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property ClienteConsulta[] $clienteConsultas
 * @property Inmueble[] $inmuebles
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('nombre, email, telefono, direccion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente, nombre, email, telefono, direccion', 'safe', 'on'=>'search'),
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
			'clienteConsultas' => array(self::HAS_MANY, 'ClienteConsulta', 'cliente_id_cliente'),
			'inmuebles' => array(self::MANY_MANY, 'Inmueble', 'cliente_inmueble(cliente_id_cliente, inmueble_id_inmueble)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Id Cliente',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'telefono' => 'Telefono',
			'direccion' => 'Direccion',
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

		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
