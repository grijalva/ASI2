<?php

/**
 * This is the model class for table "impuesto".
 *
 * The followings are the available columns in table 'impuesto':
 * @property integer $id_impuesto
 * @property string $tipo_impuesto
 * @property double $tasa
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Compra[] $compras
 */
class Impuesto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Impuesto the static model class
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
		return 'impuesto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_impuesto, tasa, fecha', 'required'),
			array('tasa', 'numerical'),
			array('tipo_impuesto', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_impuesto, tipo_impuesto, tasa, fecha', 'safe', 'on'=>'search'),
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
			'compras' => array(self::HAS_MANY, 'Compra', 'id_impuesto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_impuesto' => 'Id Impuesto',
			'tipo_impuesto' => 'Tipo Impuesto',
			'tasa' => 'Tasa',
			'fecha' => 'Fecha',
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

		$criteria->compare('id_impuesto',$this->id_impuesto);
		$criteria->compare('tipo_impuesto',$this->tipo_impuesto,true);
		$criteria->compare('tasa',$this->tasa);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}