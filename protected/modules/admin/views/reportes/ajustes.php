<?php
/**
 * Created by PhpStorm.
 * User: Edu7art
 * Date: 09-22-13
 * Time: 11:25 AM
 */


    if(isset($agencia)){
		
		try{
			Yii::app()->jasPHP->create('', 'reporteAjuste.jrxml',array("fecha_inicio"=>'04/05/2011', "fecha_fin"=>'10/12/2013', "id_agencia"=>$agencia) , null);
		}catch(Exception $e){
			echo $e;
		}
//        include_once('class/tcpdf/tcpdf.php'); // La clase que nos genera el pdf
//        include_once("class/PHPJasperXML.inc.php"); // La clase que interactua con el ireport
//        include_once ('setting.php');
//
//
//        $xml = simplexml_load_file("reporteAjuste.jrxml");
//
//        $PHPJasper = new PHPJasperXML();
//        $PHPJasper->debugsql= false;
//        $PHPJasper->arrayParameter = array("fecha_inicio"=>'mar 04/05/2011', "fecha_fin"=>'jue 10/31/2013', "id_agencia"=>$agencia);
//        $PHPJasper->xml_dismantle($xml);
//        $PHPJasper->transferDBtoArray($server, $user, $pass, $db);
//
//        $PHPJasper->outpage("I"); // I: muetsra en el browser D: descarga el pdf
//        echo $PHPJasper->test();

            }else{ ?>
        <h1>Seleccionar fecha</h1>



            <div class="form">

                <form id="ajusteform" name="ajusteform" method="get" action="<?php echo Yii::app()->baseUrl; ?>/admin/reportes/ajustes">
    <!--            --><?php //$form=$this->beginWidget('CActiveForm'); ?>


                <div class="row">
                    <label> desde </label>
                    <input type="date" id="inicio" required="true">
    <!--                --><?php //echo CHtml::textField('Frm[inicio]', '', array('required')); ?>

                </div>


                <div class="row">
                    <label> hasta </label>
    <!--                --><?php //echo CHtml::textField('Frm[hasta]', '', array('required', 'type'=>'date')); ?>
                    <input type="date" id="fin" required="true">

                    <!--                <input type="date" id="fin" required="true">-->
                </div>

                <div class="row">
                    <input type="submit" value="Reporte">
    <!--                --><?php //echo CHtml::submitButton('Reporte'); ?>
                </div>



    <!--            --><?php //$this->endWidget(); ?>

            </div>
            </form>
    <?php
    }

?>