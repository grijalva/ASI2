<?php

/**
 * This is the model class for table "envio".
 *
 * The followings are the available columns in table 'envio':
 * @property integer $id_envio
 * @property string $fecha_envio
 * @property integer $usuario_envia
 * @property integer $agencia_origen
 * @property string $fecha_recibido
 * @property integer $usuario_recibe
 * @property integer $agencia_destino
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property DetalleEnvio[] $detalleEnvios
 * @property Usuario $usuarioEnvia
 * @property Agencia $agenciaOrigen
 * @property Usuario $usuarioRecibe
 * @property Agencia $agenciaDestino
 */
class Envio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Envio the static model class
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
		return 'envio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_envio, usuario_envia, agencia_origen, agencia_destino, estado', 'required'),
			array('usuario_envia, agencia_origen, usuario_recibe, agencia_destino', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>50),
			array('fecha_recibido', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_envio, fecha_envio, usuario_envia, agencia_origen, fecha_recibido, usuario_recibe, agencia_destino, estado', 'safe', 'on'=>'search'),
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
			'detalleEnvios' => array(self::HAS_MANY, 'DetalleEnvio', 'id_envio'),
			'usuarioEnvia' => array(self::BELONGS_TO, 'Usuario', 'usuario_envia'),
			'agenciaOrigen' => array(self::BELONGS_TO, 'Agencia', 'agencia_origen'),
			'usuarioRecibe' => array(self::BELONGS_TO, 'Usuario', 'usuario_recibe'),
			'agenciaDestino' => array(self::BELONGS_TO, 'Agencia', 'agencia_destino'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_envio' => 'Id Envio',
			'fecha_envio' => 'Fecha Envio',
			'usuario_envia' => 'Usuario Envia',
			'agencia_origen' => 'Agencia Origen',
			'fecha_recibido' => 'Fecha Recibido',
			'usuario_recibe' => 'Usuario Recibe',
			'agencia_destino' => 'Agencia Destino',
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

		$criteria->compare('id_envio',$this->id_envio);
		$criteria->compare('fecha_envio',$this->fecha_envio,true);
		$criteria->compare('usuario_envia',$this->usuario_envia);
		$criteria->compare('agencia_origen',$this->agencia_origen);
		$criteria->compare('fecha_recibido',$this->fecha_recibido,true);
		$criteria->compare('usuario_recibe',$this->usuario_recibe);
		$criteria->compare('agencia_destino',$this->agencia_destino);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}