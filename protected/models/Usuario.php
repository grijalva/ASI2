<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_usuario
 * @property string $nombre_usuario
 * @property string $password
 * @property string $estado
 * @property integer $id_empleado
 * @property integer $id_rol
 *
 * The followings are the available model relations:
 * @property Ajuste[] $ajustes
 * @property Bitacora[] $bitacoras
 * @property Compra[] $compras
 * @property Cotizacion[] $cotizacions
 * @property Devolucion[] $devolucions
 * @property Envio[] $envios
 * @property Envio[] $envios1
 * @property Requisicion[] $requisicions
 * @property Empleado $idEmpleado
 * @property Rol $idRol
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
        
        public $password_repeat;
        
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_usuario, password, password_repeat, estado, id_empleado, id_rol', 'required'),
			array('id_empleado, id_rol', 'numerical', 'integerOnly'=>true),
			array('nombre_usuario, password', 'length', 'max'=>100),
                        array('nombre_usuario', 'unique'),
                        array('password', 'compare',),
                        array('password_repeat', 'safe'),
			array('estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_usuario, nombre_usuario, password, estado, id_empleado, id_rol', 'safe', 'on'=>'search'),
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
			'ajustes' => array(self::HAS_MANY, 'Ajuste', 'id_usuario'),
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'id_usuario'),
			'compras' => array(self::HAS_MANY, 'Compra', 'id_usuario'),
			'cotizacions' => array(self::HAS_MANY, 'Cotizacion', 'id_usuario'),
			'devolucions' => array(self::HAS_MANY, 'Devolucion', 'id_usuario'),
			'envios' => array(self::HAS_MANY, 'Envio', 'usuario_envia'),
			'envios1' => array(self::HAS_MANY, 'Envio', 'usuario_recibe'),
			'requisicions' => array(self::HAS_MANY, 'Requisicion', 'id_usuario'),
			'idEmpleado' => array(self::BELONGS_TO, 'Empleado', 'id_empleado'),
			'idRol' => array(self::BELONGS_TO, 'Rol', 'id_rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'nombre_usuario' => 'Nombre Usuario',
			'password' => 'Password',
            'password_repeat' => 'Repetir Password',
			'estado' => 'Estado',
			'id_empleado' => 'Id Empleado',
			'id_rol' => 'Id Rol',
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('nombre_usuario',$this->nombre_usuario,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('id_empleado',$this->id_empleado);
		$criteria->compare('id_rol',$this->id_rol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->nombre_usuario,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Incorrect username or password.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->nombre_usuario,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}