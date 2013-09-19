<?php

class RolFormularioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
	/*
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);*/
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new RolFormulario;
        $auth=Yii::app()->authManager;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RolFormulario']))
		{
            $criteria=new CDbCriteria;
            $criteria->condition='id_rol='+$model->id_rol;
            $modelRol = Rol::model()->find($criteria);

            if($auth->getAuthItem($modelRol->nombre)==null){
                $role = $auth->createRole($modelRol->nombre, $modelRol->descripcion);
            }else{
                $role = $auth->getAuthItem($modelRol->nombre);
            }

			$model->attributes=$_POST['RolFormulario'];

                foreach($model->id_formulario as $id_form){

                    $modelo=new RolFormulario;
                    $modelFormulario = Formulario::model()->findByPk($id_form);
                    if($auth->getAuthItem($modelFormulario->nombre)==null){
                    $auth->createOperation($modelFormulario->nombre, $modelFormulario->descripcion);
                    }
                    $modelo->id_formulario = $id_form;
                    $modelo->id_rol = $model->id_rol;
                        if($modelo->save()){
                            $role->addChild($modelFormulario->nombre);
                            $auth->save();
                        }
                }
			$this->redirect(array('view','id'=>$modelo->id_rol_formulario));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RolFormulario']))
		{
			$model->attributes=$_POST['RolFormulario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_rol_formulario));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
        $auth=Yii::app()->authManager;
        $auth->removeAuthItem();
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model = new RolFormulario;
		$dataProvider=new CActiveDataProvider('RolFormulario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider, 'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RolFormulario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RolFormulario']))
			$model->attributes=$_GET['RolFormulario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RolFormulario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=RolFormulario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'La pagina no existe o usted no tiene acceso a ella');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RolFormulario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rol-formulario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
