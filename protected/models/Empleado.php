<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property integer $id_empleado
 * @property string $nombres
 * @property string $apellidos
 * @property string $direccion
 * @property string $tel_casa
 * @property string $tel_movil
 * @property integer $email
 * @property string $genero
 * @property string $fecha_nacimiento
 * @property string $fecha_ingreso
 * @property string $estado
 * @property integer $id_cargo
 * @property integer $id_agencia
 *
 * The followings are the available model relations:
 * @property Documento[] $documentos
 * @property Cargo $idCargo
 * @property Agencia $idAgencia
 * @property Usuario[] $usuarios
 */
class Empleado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Empleado the static model class
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
		return 'empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, tel_movil, genero, fecha_nacimiento, estado, id_cargo, id_agencia', 'required'),
			array('email, id_cargo, id_agencia', 'numerical', 'integerOnly'=>true),
			array('nombres, apellidos', 'length', 'max'=>50),
			array('direccion', 'length', 'max'=>1000),
			array('tel_casa, tel_movil', 'length', 'max'=>15),
			array('genero, estado', 'length', 'max'=>1),
			array('fecha_ingreso', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_empleado, nombres, apellidos, direccion, tel_casa, tel_movil, email, genero, fecha_nacimiento, fecha_ingreso, estado, id_cargo, id_agencia', 'safe', 'on'=>'search'),
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
			'documentos' => array(self::HAS_MANY, 'Documento', 'id_empleado'),
			'idCargo' => array(self::BELONGS_TO, 'Cargo', 'id_cargo'),
			'idAgencia' => array(self::BELONGS_TO, 'Agencia', 'id_agencia'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'id_empleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_empleado' => 'Id Empleado',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'direccion' => 'Direccion',
			'tel_casa' => 'Tel Casa',
			'tel_movil' => 'Tel Movil',
			'email' => 'Email',
			'genero' => 'Genero',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'fecha_ingreso' => 'Fecha Ingreso',
			'estado' => 'Estado',
			'id_cargo' => 'Id Cargo',
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

		$criteria->compare('id_empleado',$this->id_empleado);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('tel_casa',$this->tel_casa,true);
		$criteria->compare('tel_movil',$this->tel_movil,true);
		$criteria->compare('email',$this->email);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('id_cargo',$this->id_cargo);
		$criteria->compare('id_agencia',$this->id_agencia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}