<?php

/**
 * This is the model class for table "rol_formulario".
 *
 * The followings are the available columns in table 'rol_formulario':
 * @property integer $id_rol_formulario
 * @property integer $id_formulario
 * @property integer $id_rol
 *
 * The followings are the available model relations:
 * @property Formulario $idFormulario
 * @property Rol $idRol
 */
class RolFormulario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RolFormulario the static model class
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
		return 'rol_formulario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_formulario, id_rol', 'required'),
			array('id_formulario, id_rol', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_rol_formulario, id_formulario, id_rol', 'safe', 'on'=>'search'),
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
			'idFormulario' => array(self::BELONGS_TO, 'Formulario', 'id_formulario'),
			'idRol' => array(self::BELONGS_TO, 'Rol', 'id_rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_rol_formulario' => 'Id Rol Formulario',
			'id_formulario' => 'Id Formulario',
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

		$criteria->compare('id_rol_formulario',$this->id_rol_formulario);
		$criteria->compare('id_formulario',$this->id_formulario);
		$criteria->compare('id_rol',$this->id_rol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}