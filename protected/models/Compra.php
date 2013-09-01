<?php

/**
 * This is the model class for table "compra".
 *
 * The followings are the available columns in table 'compra':
 * @property integer $id_compra
 * @property string $num_factura
 * @property string $fecha
 * @property string $tipo_compra
 * @property string $estado
 * @property integer $id_usuario
 * @property integer $id_cotizacion
 * @property integer $id_tipo_pago
 * @property integer $id_tipo_factura
 * @property integer $id_impuesto
 * @property integer $id_quedan
 * @property integer $id_proveedor
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario
 * @property Cotizacion $idCotizacion
 * @property TipoPago $idTipoPago
 * @property TipoFactura $idTipoFactura
 * @property Impuesto $idImpuesto
 * @property Quedan $idQuedan
 * @property Proveedor $idProveedor
 * @property DetalleCompra[] $detalleCompras
 * @property Lote[] $lotes
 */
class Compra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Compra the static model class
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
		return 'compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num_factura, fecha, tipo_compra, estado, id_usuario, id_tipo_pago, id_tipo_factura, id_impuesto, id_proveedor', 'required'),
			array('id_usuario, id_cotizacion, id_tipo_pago, id_tipo_factura, id_impuesto, id_quedan, id_proveedor', 'numerical', 'integerOnly'=>true),
			array('num_factura, tipo_compra, estado', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_compra, num_factura, fecha, tipo_compra, estado, id_usuario, id_cotizacion, id_tipo_pago, id_tipo_factura, id_impuesto, id_quedan, id_proveedor', 'safe', 'on'=>'search'),
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
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
			'idCotizacion' => array(self::BELONGS_TO, 'Cotizacion', 'id_cotizacion'),
			'idTipoPago' => array(self::BELONGS_TO, 'TipoPago', 'id_tipo_pago'),
			'idTipoFactura' => array(self::BELONGS_TO, 'TipoFactura', 'id_tipo_factura'),
			'idImpuesto' => array(self::BELONGS_TO, 'Impuesto', 'id_impuesto'),
			'idQuedan' => array(self::BELONGS_TO, 'Quedan', 'id_quedan'),
			'idProveedor' => array(self::BELONGS_TO, 'Proveedor', 'id_proveedor'),
			'detalleCompras' => array(self::HAS_MANY, 'DetalleCompra', 'id_compra'),
			'lotes' => array(self::HAS_MANY, 'Lote', 'id_compra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_compra' => 'Id Compra',
			'num_factura' => 'Num Factura',
			'fecha' => 'Fecha',
			'tipo_compra' => 'Tipo Compra',
			'estado' => 'Estado',
			'id_usuario' => 'Id Usuario',
			'id_cotizacion' => 'Id Cotizacion',
			'id_tipo_pago' => 'Id Tipo Pago',
			'id_tipo_factura' => 'Id Tipo Factura',
			'id_impuesto' => 'Id Impuesto',
			'id_quedan' => 'Id Quedan',
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

		$criteria->compare('id_compra',$this->id_compra);
		$criteria->compare('num_factura',$this->num_factura,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('tipo_compra',$this->tipo_compra,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_cotizacion',$this->id_cotizacion);
		$criteria->compare('id_tipo_pago',$this->id_tipo_pago);
		$criteria->compare('id_tipo_factura',$this->id_tipo_factura);
		$criteria->compare('id_impuesto',$this->id_impuesto);
		$criteria->compare('id_quedan',$this->id_quedan);
		$criteria->compare('id_proveedor',$this->id_proveedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}