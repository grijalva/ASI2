<?php

/**
 * This is the model class for table "detalle_envio".
 *
 * The followings are the available columns in table 'detalle_envio':
 * @property integer $id_detalle_envio
 * @property double $cantidad_enviado
 * @property double $cantidad_recibido
 * @property integer $id_envio
 * @property integer $id_inventario
 * @property integer $id_lote
 *
 * The followings are the available model relations:
 * @property Envio $idEnvio
 * @property Inventario $idInventario
 * @property Lote $idLote
 */
class DetalleEnvio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetalleEnvio the static model class
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
		return 'detalle_envio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad_enviado, id_envio, id_inventario, id_lote', 'required'),
			array('id_envio, id_inventario, id_lote', 'numerical', 'integerOnly'=>true),
			array('cantidad_enviado, cantidad_recibido', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_detalle_envio, cantidad_enviado, cantidad_recibido, id_envio, id_inventario, id_lote', 'safe', 'on'=>'search'),
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
			'idEnvio' => array(self::BELONGS_TO, 'Envio', 'id_envio'),
			'idInventario' => array(self::BELONGS_TO, 'Inventario', 'id_inventario'),
			'idLote' => array(self::BELONGS_TO, 'Lote', 'id_lote'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_detalle_envio' => 'Id Detalle Envio',
			'cantidad_enviado' => 'Cantidad Enviado',
			'cantidad_recibido' => 'Cantidad Recibido',
			'id_envio' => 'Id Envio',
			'id_inventario' => 'Id Inventario',
			'id_lote' => 'Id Lote',
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

		$criteria->compare('id_detalle_envio',$this->id_detalle_envio);
		$criteria->compare('cantidad_enviado',$this->cantidad_enviado);
		$criteria->compare('cantidad_recibido',$this->cantidad_recibido);
		$criteria->compare('id_envio',$this->id_envio);
		$criteria->compare('id_inventario',$this->id_inventario);
		$criteria->compare('id_lote',$this->id_lote);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}