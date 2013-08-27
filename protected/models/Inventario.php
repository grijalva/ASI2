<?php

/**
 * This is the model class for table "inventario".
 *
 * The followings are the available columns in table 'inventario':
 * @property integer $id_inventario
 * @property string $codigo_producto
 * @property double $stock_max
 * @property double $stock
 * @property double $stock_min
 * @property string $estado
 * @property integer $id_ubicacion
 * @property integer $id_unidad
 * @property integer $id_agencia
 * @property integer $id_producto
 * @property integer $id_proveedor
 *
 * The followings are the available model relations:
 * @property DetalleEnvio[] $detalleEnvios
 * @property DetalleRequisicion[] $detalleRequisicions
 * @property Ubicacion $idUbicacion
 * @property UnidadDeMedida $idUnidad
 * @property Agencia $idAgencia
 * @property Producto $idProducto
 * @property Proveedor $idProveedor
 * @property LoteDetalle[] $loteDetalles
 */
class Inventario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Inventario the static model class
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
		return 'inventario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_producto, stock_max, stock, stock_min, estado, id_ubicacion, id_unidad, id_agencia, id_producto, id_proveedor', 'required'),
			array('id_ubicacion, id_unidad, id_agencia, id_producto, id_proveedor', 'numerical', 'integerOnly'=>true),
			array('stock_max, stock, stock_min', 'numerical'),
			array('codigo_producto, estado', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_inventario, codigo_producto, stock_max, stock, stock_min, estado, id_ubicacion, id_unidad, id_agencia, id_producto, id_proveedor', 'safe', 'on'=>'search'),
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
			'detalleEnvios' => array(self::HAS_MANY, 'DetalleEnvio', 'id_inventario'),
			'detalleRequisicions' => array(self::HAS_MANY, 'DetalleRequisicion', 'id_inventario'),
			'idUbicacion' => array(self::BELONGS_TO, 'Ubicacion', 'id_ubicacion'),
			'idUnidad' => array(self::BELONGS_TO, 'UnidadDeMedida', 'id_unidad'),
			'idAgencia' => array(self::BELONGS_TO, 'Agencia', 'id_agencia'),
			'idProducto' => array(self::BELONGS_TO, 'Producto', 'id_producto'),
			'idProveedor' => array(self::BELONGS_TO, 'Proveedor', 'id_proveedor'),
			'loteDetalles' => array(self::HAS_MANY, 'LoteDetalle', 'id_inventario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_inventario' => 'Id Inventario',
			'codigo_producto' => 'Codigo Producto',
			'stock_max' => 'Stock Max',
			'stock' => 'Stock',
			'stock_min' => 'Stock Min',
			'estado' => 'Estado',
			'id_ubicacion' => 'Id Ubicacion',
			'id_unidad' => 'Id Unidad',
			'id_agencia' => 'Id Agencia',
			'id_producto' => 'Id Producto',
			'id_proveedor' => 'Id Proveedor',
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

		$criteria->compare('id_inventario',$this->id_inventario);
		$criteria->compare('codigo_producto',$this->codigo_producto,true);
		$criteria->compare('stock_max',$this->stock_max);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('stock_min',$this->stock_min);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('id_ubicacion',$this->id_ubicacion);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('id_agencia',$this->id_agencia);
		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('id_proveedor',$this->id_proveedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}