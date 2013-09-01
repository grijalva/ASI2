<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id_producto
 * @property string $nombre
 * @property string $descripcion
 * @property string $url
 * @property integer $id_marca
 * @property integer $id_categoria_producto
 *
 * The followings are the available model relations:
 * @property DetalleCompra[] $detalleCompras
 * @property DetalleCotizacion[] $detalleCotizacions
 * @property Inventario[] $inventarios
 * @property Lote[] $lotes
 * @property Marca $idMarca
 * @property CategoriaProducto $idCategoriaProducto
 */
class Producto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Producto the static model class
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
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('id_marca, id_categoria_producto', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>1000),
			array('url', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_producto, nombre, descripcion, url, id_marca, id_categoria_producto', 'safe', 'on'=>'search'),
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
			'detalleCompras' => array(self::HAS_MANY, 'DetalleCompra', 'id_producto'),
			'detalleCotizacions' => array(self::HAS_MANY, 'DetalleCotizacion', 'id_producto'),
			'inventarios' => array(self::HAS_MANY, 'Inventario', 'id_producto'),
			'lotes' => array(self::HAS_MANY, 'Lote', 'id_producto'),
			'idMarca' => array(self::BELONGS_TO, 'Marca', 'id_marca'),
			'idCategoriaProducto' => array(self::BELONGS_TO, 'CategoriaProducto', 'id_categoria_producto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_producto' => 'Id Producto',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'url' => 'Url',
			'id_marca' => 'Id Marca',
			'id_categoria_producto' => 'Id Categoria Producto',
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

		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('id_marca',$this->id_marca);
		$criteria->compare('id_categoria_producto',$this->id_categoria_producto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}