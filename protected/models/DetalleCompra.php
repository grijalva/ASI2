<?php

/**
 * This is the model class for table "detalle_compra".
 *
 * The followings are the available columns in table 'detalle_compra':
 * @property integer $id_detalle_compra
 * @property double $cantidad
 * @property double $costo_unitario
 * @property string $fecha_vencimiento
 * @property integer $id_compra
 * @property integer $id_producto
 *
 * The followings are the available model relations:
 * @property Compra $idCompra
 * @property Producto $idProducto
 */
class DetalleCompra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetalleCompra the static model class
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
		return 'detalle_compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad, costo_unitario, id_compra, id_producto', 'required'),
			array('id_compra, id_producto', 'numerical', 'integerOnly'=>true),
			array('cantidad, costo_unitario', 'numerical'),
			array('fecha_vencimiento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_detalle_compra, cantidad, costo_unitario, fecha_vencimiento, id_compra, id_producto', 'safe', 'on'=>'search'),
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
			'idCompra' => array(self::BELONGS_TO, 'Compra', 'id_compra'),
			'idProducto' => array(self::BELONGS_TO, 'Producto', 'id_producto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_detalle_compra' => 'Id Detalle Compra',
			'cantidad' => 'Cantidad',
			'costo_unitario' => 'Costo Unitario',
			'fecha_vencimiento' => 'Fecha Vencimiento',
			'id_compra' => 'Id Compra',
			'id_producto' => 'Id Producto',
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

		$criteria->compare('id_detalle_compra',$this->id_detalle_compra);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('costo_unitario',$this->costo_unitario);
		$criteria->compare('fecha_vencimiento',$this->fecha_vencimiento,true);
		$criteria->compare('id_compra',$this->id_compra);
		$criteria->compare('id_producto',$this->id_producto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}