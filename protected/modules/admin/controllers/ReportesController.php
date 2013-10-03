<?php
/**
 * Created by PhpStorm.
 * User: Edu7art
 * Date: 09-22-13
 * Time: 11:15 AM
 */

class ReportesController extends Controller {

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


    public function accessRules()
    {
        /*
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
        );*/
    }

    public function actionAjustes($inicio = '', $fin = ''){

        if($inicio!==''){
            $empleado = Empleado::model()->findByPk(Yii::app()->user->getState('empleado'));
            $agencia = $empleado->id_agencia;

            $this->render('ajustes', array(
                'inicio'=>$inicio,
                'fin'=>$fin,
                'agencia'=>$agencia,
            ));

        }else{
            $this->render('ajustes');
        }

    }
} 