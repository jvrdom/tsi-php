<?php

/**
 * This is the model class for table "cliente_inmueble".
 *
 * The followings are the available columns in table 'cliente_inmueble':
 * @property integer $id_cliente_inmueble
 * @property integer $cliente_id_cliente
 * @property integer $inmueble_id_inmueble
 * @property string $fecha_ini
 * @property string $visito
 *
 * The followings are the available model relations:
 * @property Cliente $clienteIdCliente
 * @property Inmueble $inmuebleIdInmueble
 */
class ClienteInmueble extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente_inmueble';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cliente_id_cliente, inmueble_id_inmueble, fecha_ini', 'required'),
			array('cliente_id_cliente, inmueble_id_inmueble', 'numerical', 'integerOnly'=>true),
			array('visito', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente_inmueble, cliente_id_cliente, inmueble_id_inmueble, fecha_ini, visito', 'safe', 'on'=>'search'),
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
			'clienteIdCliente' => array(self::BELONGS_TO, 'Cliente', 'cliente_id_cliente'),
			'inmuebleIdInmueble' => array(self::BELONGS_TO, 'Inmueble', 'inmueble_id_inmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente_inmueble' => 'Id Cliente Inmueble',
			'cliente_id_cliente' => 'Cliente Id Cliente',
			'inmueble_id_inmueble' => 'Inmueble Id Inmueble',
			'fecha_ini' => 'Fecha Ini',
			'visito' => 'Visito',
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

		$criteria->compare('id_cliente_inmueble',$this->id_cliente_inmueble);
		$criteria->compare('cliente_id_cliente',$this->cliente_id_cliente);
		$criteria->compare('inmueble_id_inmueble',$this->inmueble_id_inmueble);
		$criteria->compare('fecha_ini',$this->fecha_ini,true);
		$criteria->compare('visito',$this->visito,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClienteInmueble the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
