<?php

/**
 * This is the model class for table "requisicion".
 *
 * The followings are the available columns in table 'requisicion':
 * @property integer $id_requisicion
 * @property string $fecha
 * @property string $estado
 * @property string $descripcion
 * @property integer $id_usuario
 * @property integer $id_agencia
 *
 * The followings are the available model relations:
 * @property DetalleRequisicion[] $detalleRequisicions
 * @property Usuario $idUsuario
 * @property Agencia $idAgencia
 */
class Requisicion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Requisicion the static model class
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
		return 'requisicion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, estado, descripcion, id_usuario, id_agencia', 'required'),
			array('id_usuario, id_agencia', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>30),
			array('descripcion', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_requisicion, fecha, estado, descripcion, id_usuario, id_agencia', 'safe', 'on'=>'search'),
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
			'detalleRequisicions' => array(self::HAS_MANY, 'DetalleRequisicion', 'id_requisicion'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
			'idAgencia' => array(self::BELONGS_TO, 'Agencia', 'id_agencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_requisicion' => 'Id Requisicion',
			'fecha' => 'Fecha',
			'estado' => 'Estado',
			'descripcion' => 'Descripcion',
			'id_usuario' => 'Id Usuario',
			'id_agencia' => 'Id Agencia',
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

		$criteria->compare('id_requisicion',$this->id_requisicion);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_agencia',$this->id_agencia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}