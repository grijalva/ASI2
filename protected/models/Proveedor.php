<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $id_proveedor
 * @property string $nombre
 * @property string $direccion
 * @property string $tel_contacto
 * @property integer $id_municipio
 *
 * The followings are the available model relations:
 * @property Compra[] $compras
 * @property Cotizacion[] $cotizacions
 * @property Encargado[] $encargados
 * @property Inventario[] $inventarios
 * @property Lote[] $lotes
 * @property Municipio $idMunicipio
 */
class Proveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
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
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tel_contacto', 'required'),
			array('id_municipio', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('direccion', 'length', 'max'=>1000),
			array('tel_contacto', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_proveedor, nombre, direccion, tel_contacto, id_municipio', 'safe', 'on'=>'search'),
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
			'compras' => array(self::HAS_MANY, 'Compra', 'id_proveedor'),
			'cotizacions' => array(self::HAS_MANY, 'Cotizacion', 'id_proveedor'),
			'encargados' => array(self::HAS_MANY, 'Encargado', 'id_proveedor'),
			'inventarios' => array(self::HAS_MANY, 'Inventario', 'id_proveedor'),
			'lotes' => array(self::HAS_MANY, 'Lote', 'id_proveedor'),
			'idMunicipio' => array(self::BELONGS_TO, 'Municipio', 'id_municipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proveedor' => 'Id Proveedor',
			'nombre' => 'Nombre',
			'direccion' => 'Direccion',
			'tel_contacto' => 'Tel Contacto',
			'id_municipio' => 'Id Municipio',
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

		$criteria->compare('id_proveedor',$this->id_proveedor);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('tel_contacto',$this->tel_contacto,true);
		$criteria->compare('id_municipio',$this->id_municipio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}