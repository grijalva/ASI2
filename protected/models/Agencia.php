<?php

/**
 * This is the model class for table "agencia".
 *
 * The followings are the available columns in table 'agencia':
 * @property integer $id_agencia
 * @property string $nombre
 * @property string $descripcion
 * @property string $tel_1
 * @property string $tel_2
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Empleado[] $empleados
 * @property Envio[] $envios
 * @property Envio[] $envios1
 * @property Estante[] $estantes
 * @property Inventario[] $inventarios
 * @property Requisicion[] $requisicions
 */
class Agencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Agencia the static model class
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
		return 'agencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tel_1, estado', 'required'),
			array('nombre', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>1000),
			array('tel_1, tel_2', 'length', 'max'=>15),
			array('estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_agencia, nombre, descripcion, tel_1, tel_2, estado', 'safe', 'on'=>'search'),
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
			'empleados' => array(self::HAS_MANY, 'Empleado', 'id_agencia'),
			'envios' => array(self::HAS_MANY, 'Envio', 'agencia_origen'),
			'envios1' => array(self::HAS_MANY, 'Envio', 'agencia_destino'),
			'estantes' => array(self::HAS_MANY, 'Estante', 'id_agencia'),
			'inventarios' => array(self::HAS_MANY, 'Inventario', 'id_agencia'),
			'requisicions' => array(self::HAS_MANY, 'Requisicion', 'id_agencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_agencia' => 'Id Agencia',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'tel_1' => 'Tel 1',
			'tel_2' => 'Tel 2',
			'estado' => 'Estado',
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

		$criteria->compare('id_agencia',$this->id_agencia);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tel_1',$this->tel_1,true);
		$criteria->compare('tel_2',$this->tel_2,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}