<?php

/**
 * This is the model class for table "ajuste".
 *
 * The followings are the available columns in table 'ajuste':
 * @property integer $id_ajuste
 * @property string $fecha
 * @property string $tipo_ajuste
 * @property string $descripcion
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario
 * @property DetalleAjuste[] $detalleAjustes
 */
class Ajuste extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ajuste the static model class
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
		return 'ajuste';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, tipo_ajuste, id_usuario', 'required'),
			array('id_usuario', 'numerical', 'integerOnly'=>true),
			array('tipo_ajuste', 'length', 'max'=>30),
			array('descripcion', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ajuste, fecha, tipo_ajuste, descripcion, id_usuario', 'safe', 'on'=>'search'),
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
			'detalleAjustes' => array(self::HAS_MANY, 'DetalleAjuste', 'id_ajuste'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ajuste' => 'Id Ajuste',
			'fecha' => 'Fecha',
			'tipo_ajuste' => 'Tipo Ajuste',
			'descripcion' => 'Descripcion',
			'id_usuario' => 'Id Usuario',
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

		$criteria->compare('id_ajuste',$this->id_ajuste);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('tipo_ajuste',$this->tipo_ajuste,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}