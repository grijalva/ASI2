<?php

/**
 * This is the model class for table "detalle_requisicion".
 *
 * The followings are the available columns in table 'detalle_requisicion':
 * @property integer $id_detalle_requisicion
 * @property double $cantidad
 * @property integer $id_inventario
 * @property integer $id_requisicion
 *
 * The followings are the available model relations:
 * @property Inventario $idInventario
 * @property Requisicion $idRequisicion
 */
class DetalleRequisicion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetalleRequisicion the static model class
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
		return 'detalle_requisicion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad, id_inventario, id_requisicion', 'required'),
			array('id_inventario, id_requisicion', 'numerical', 'integerOnly'=>true),
			array('cantidad', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_detalle_requisicion, cantidad, id_inventario, id_requisicion', 'safe', 'on'=>'search'),
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
			'idInventario' => array(self::BELONGS_TO, 'Inventario', 'id_inventario'),
			'idRequisicion' => array(self::BELONGS_TO, 'Requisicion', 'id_requisicion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_detalle_requisicion' => 'Id Detalle Requisicion',
			'cantidad' => 'Cantidad',
			'id_inventario' => 'Id Inventario',
			'id_requisicion' => 'Id Requisicion',
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

		$criteria->compare('id_detalle_requisicion',$this->id_detalle_requisicion);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('id_inventario',$this->id_inventario);
		$criteria->compare('id_requisicion',$this->id_requisicion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}