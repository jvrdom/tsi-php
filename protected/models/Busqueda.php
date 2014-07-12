<?php

/**
 * This is the model class for table "busqueda".
 *
 * The followings are the available columns in table 'busqueda':
 * @property integer $id_busqueda
 * @property double $precio
 * @property string $superficie
 * @property string $dormitorios
 * @property integer $baños
 * @property string $direccion
 * @property string $descripcion
 * @property string $tipo
 * @property integer $esPendiente
 */
class Busqueda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'busqueda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('baños, esPendiente', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('superficie, dormitorios, direccion, descripcion, tipo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_busqueda, precio, superficie, dormitorios, baños, direccion, descripcion, tipo, esPendiente', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_busqueda' => 'Id Busqueda',
			'precio' => 'Precio',
			'superficie' => 'Superficie',
			'dormitorios' => 'Dormitorios',
			'baños' => 'Baños',
			'direccion' => 'Direccion',
			'descripcion' => 'Descripcion',
			'tipo' => 'Tipo',
			'esPendiente' => 'Es Pendiente',
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

		$criteria->compare('id_busqueda',$this->id_busqueda);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('superficie',$this->superficie,true);
		$criteria->compare('dormitorios',$this->dormitorios,true);
		$criteria->compare('baños',$this->baños);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('esPendiente',$this->esPendiente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Busqueda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
