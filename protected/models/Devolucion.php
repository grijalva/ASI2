<?php

/**
 * This is the model class for table "devolucion".
 *
 * The followings are the available columns in table 'devolucion':
 * @property integer $id_devolucion
 * @property string $fecha
 * @property string $titulo
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property DetalleDevolucion[] $detalleDevolucions
 * @property Usuario $idUsuario
 */
class Devolucion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Devolucion the static model class
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
		return 'devolucion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, titulo, id_usuario', 'required'),
			array('id_usuario', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_devolucion, fecha, titulo, id_usuario', 'safe', 'on'=>'search'),
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
			'detalleDevolucions' => array(self::HAS_MANY, 'DetalleDevolucion', 'id_devolucion'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_devolucion' => 'Id Devolucion',
			'fecha' => 'Fecha',
			'titulo' => 'Titulo',
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

		$criteria->compare('id_devolucion',$this->id_devolucion);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}