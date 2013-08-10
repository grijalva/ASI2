<?php

/**
 * This is the model class for table "formulario".
 *
 * The followings are the available columns in table 'formulario':
 * @property integer $id_formulario
 * @property string $nombre
 * @property string $direccion
 * @property string $descripcion
 * @property integer $padre_fk
 *
 * The followings are the available model relations:
 * @property Formulario $padreFk
 * @property Formulario[] $formularios
 * @property RolFormulario[] $rolFormularios
 */
class Formulario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Formulario the static model class
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
		return 'formulario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, direccion, padre_fk', 'required'),
			array('padre_fk', 'numerical', 'integerOnly'=>true),
			array('nombre, direccion', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_formulario, nombre, direccion, descripcion, padre_fk', 'safe', 'on'=>'search'),
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
			'padreFk' => array(self::BELONGS_TO, 'Formulario', 'padre_fk'),
			'formularios' => array(self::HAS_MANY, 'Formulario', 'padre_fk'),
			'rolFormularios' => array(self::HAS_MANY, 'RolFormulario', 'id_formulario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_formulario' => 'Id Formulario',
			'nombre' => 'Nombre',
			'direccion' => 'Direccion',
			'descripcion' => 'Descripcion',
			'padre_fk' => 'Padre Fk',
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

		$criteria->compare('id_formulario',$this->id_formulario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('padre_fk',$this->padre_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}