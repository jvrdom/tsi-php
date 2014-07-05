<?php

/**
 * This is the model class for table "imagen".
 *
 * The followings are the available columns in table 'imagen':
 * @property integer $id_imagen
 * @property string $url
 * @property integer $esPortada
 * @property integer $inmueble_id_inmueble
 *
 * The followings are the available model relations:
 * @property Inmueble $inmuebleIdInmueble
 */
class Imagen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('inmueble_id_inmueble', 'required'),
			array('esPortada, inmueble_id_inmueble', 'numerical', 'integerOnly'=>true),
			array('url', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_imagen, url, esPortada, inmueble_id_inmueble', 'safe', 'on'=>'search'),
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
			'inmueble' => array(self::BELONGS_TO, 'Inmueble', 'inmueble_id_inmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_imagen' => 'Id Imagen',
			'url' => 'Url',
			'esPortada' => 'Es Portada',
			'inmueble_id_inmueble' => 'Inmueble Id Inmueble',
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

		$criteria->compare('id_imagen',$this->id_imagen);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('esPortada',$this->esPortada);
		$criteria->compare('inmueble_id_inmueble',$this->inmueble_id_inmueble);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imagen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
