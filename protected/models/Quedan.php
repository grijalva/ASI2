<?php

/**
 * This is the model class for table "quedan".
 *
 * The followings are the available columns in table 'quedan':
 * @property integer $id_quedan
 * @property string $numero_quedan
 * @property string $fecha_pago
 * @property string $nombre_cheque
 *
 * The followings are the available model relations:
 * @property Compra[] $compras
 */
class Quedan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Quedan the static model class
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
		return 'quedan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_quedan, fecha_pago, nombre_cheque', 'required'),
			array('numero_quedan', 'length', 'max'=>30),
			array('nombre_cheque', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_quedan, numero_quedan, fecha_pago, nombre_cheque', 'safe', 'on'=>'search'),
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
			'compras' => array(self::HAS_MANY, 'Compra', 'id_quedan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_quedan' => 'Id Quedan',
			'numero_quedan' => 'Numero Quedan',
			'fecha_pago' => 'Fecha Pago',
			'nombre_cheque' => 'Nombre Cheque',
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

		$criteria->compare('id_quedan',$this->id_quedan);
		$criteria->compare('numero_quedan',$this->numero_quedan,true);
		$criteria->compare('fecha_pago',$this->fecha_pago,true);
		$criteria->compare('nombre_cheque',$this->nombre_cheque,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}