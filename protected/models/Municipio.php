<?php

/**
 * This is the model class for table "municipio".
 *
 * The followings are the available columns in table 'municipio':
 * @property integer $id_municipio
 * @property string $nombre
 * @property string $codigo
 * @property integer $id_departamento
 *
 * The followings are the available model relations:
 * @property Departamento $idDepartamento
 * @property Proveedor[] $proveedors
 */
class Municipio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Municipio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, codigo, id_departamento', 'required'),
			array('id_departamento', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('codigo', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_municipio, nombre, codigo, id_departamento', 'safe', 'on'=>'search'),
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
			'idDepartamento' => array(self::BELONGS_TO, 'Departamento', 'id_departamento'),
			'proveedors' => array(self::HAS_MANY, 'Proveedor', 'id_municipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_municipio' => 'Id Municipio',
			'nombre' => 'Nombre',
			'codigo' => 'Codigo',
			'id_departamento' => 'Id Departamento',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_municipio',$this->id_municipio);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('id_departamento',$this->id_departamento);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}