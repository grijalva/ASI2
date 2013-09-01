<?php

/**
 * This is the model class for table "cotizacion".
 *
 * The followings are the available columns in table 'cotizacion':
 * @property integer $id_cotizacion
 * @property string $fecha
 * @property integer $tiempo_vigencia
 * @property string $estado
 * @property integer $id_usuario
 * @property integer $id_proveedor
 *
 * The followings are the available model relations:
 * @property Compra[] $compras
 * @property Usuario $idUsuario
 * @property Proveedor $idProveedor
 * @property DetalleCotizacion[] $detalleCotizacions
 */
class Cotizacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cotizacion the static model class
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
		return 'cotizacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, tiempo_vigencia, estado, id_usuario, id_proveedor', 'required'),
			array('tiempo_vigencia, id_usuario, id_proveedor', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_cotizacion, fecha, tiempo_vigencia, estado, id_usuario, id_proveedor', 'safe', 'on'=>'search'),
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
			'compras' => array(self::HAS_MANY, 'Compra', 'id_cotizacion'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
			'idProveedor' => array(self::BELONGS_TO, 'Proveedor', 'id_proveedor'),
			'detalleCotizacions' => array(self::HAS_MANY, 'DetalleCotizacion', 'id_cotizacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cotizacion' => 'Id Cotizacion',
			'fecha' => 'Fecha',
			'tiempo_vigencia' => 'Tiempo Vigencia',
			'estado' => 'Estado',
			'id_usuario' => 'Id Usuario',
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

		$criteria->compare('id_cotizacion',$this->id_cotizacion);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('tiempo_vigencia',$this->tiempo_vigencia);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_proveedor',$this->id_proveedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}