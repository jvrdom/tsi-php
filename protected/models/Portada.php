<?php

/**
 * This is the model class for table "portada".
 *
 * The followings are the available columns in table 'portada':
 * @property string $portfch
 * @property integer $id_inmueble
 * @property integer $orden
 * @property integer $id_portada
 *
 * The followings are the available model relations:
 * @property Inmueble $idInmueble
 */
class Portada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'portada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('portfch, id_inmueble', 'required'),
			array('id_inmueble, orden', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('portfch, id_inmueble, orden, id_portada', 'safe', 'on'=>'search'),
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
			'idInmueble' => array(self::BELONGS_TO, 'Inmueble', 'id_inmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'portfch' => 'Fecha',
			'id_inmueble' => 'Inmueble',
			'orden' => 'Orden',
			'id_portada' => 'Id Portada',
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

		$criteria->compare('portfch',$this->portfch,true);
		$criteria->compare('id_inmueble',$this->id_inmueble);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('id_portada',$this->id_portada);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Portada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
