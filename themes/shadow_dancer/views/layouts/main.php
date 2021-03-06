<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="topnav">
        <?php if (Yii::app()->user->getId() !== null){ ?>
		    <div class="topnav_text">,<a>Bienvenido <?php echo Yii::app()->user->getState('nombre'); ?></a> | <a href='<?php echo Yii::app()->baseUrl; ?>'>Home</a> | <a href='<?php echo Yii::app()->baseUrl; ?>/site/logout'>Logout</a> </div>
        <?php }else{ ?>
            <div class="topnav_text"><a href='<?php echo Yii::app()->baseUrl; ?>'>Home</a> | <a href='<?php echo Yii::app()->baseUrl; ?>/site/login'>Login</a> </div>
        <?php } ?>
	</div>
	<div id="header">
		<div id="logo"><a href="<?php echo Yii::app()->baseUrl; ?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.jpg" width="243px" height="202px"/></a><h3 style="color:white;"><?php echo CHtml::encode(Yii::app()->name); ?><h3></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php
        if (Yii::app()->user->getId() !== null){

            $rol = Yii::app()->user->getState('rol');
            $crit = new CDbCriteria;
            $crit->condition='id_rol ='.$rol;
            $rolForm = RolFormulario::model()->findAll($crit);
            if($rolForm!==null){
                $forms = array();
                $formAct = new RolFormulario;
                foreach($rolForm as $formAct){
                    $forms[]= $formAct->id_formulario;
                }
                $criteria=new CDbCriteria;
                $criteria->condition='padre_fk=1 and id_formulario <> 1';
                $criteria->addInCondition('id_formulario', $forms);
                $formulario = new Formulario;
                $formularios = Formulario::model()->findAll($criteria);

                if($formularios !== null || empty($formularios)){
                    $form1 = new Formulario;
                    $form2 = new Formulario;
                    $form3 = new Formulario;
                    $form4 = new Formulario;

                    $menu = array();
                    $menu1 = array();
                    $menu2 = array();
                    $vacio=0;

                    foreach($formularios as $formulario){
                        $menu1['url'] = array('route'=>($formulario->direccion));
                        $menu1['label'] = $formulario->nombre;
                        $criteria=new CDbCriteria;
                        $criteria->condition='padre_fk=:id_formulario';
                        $criteria->params=array(':id_formulario'=>($formulario->id_formulario));
                        $criteria->addInCondition('id_formulario', $forms);
                        $form1=Formulario::model()->findAll($criteria);
                        if($form1!==null and !empty($form1)){
                            foreach($form1 as $form2){
                                $menu2['url'] = array('route'=>($form2->direccion));
                                $menu2['label'] = $form2->nombre;
                                $criteria=new CDbCriteria;
                                $criteria->condition='padre_fk=:id_formulario';
                                $criteria->params=array(':id_formulario'=>($form2->id_formulario));
                                $criteria->addInCondition('id_formulario', $forms);
                                $form3=Formulario::model()->findAll($criteria);
                                if($form3!==null || !empty($form3)){
                                    foreach($form3 as $form4){
                                        $menu3['url'] = array('route'=>($form4->direccion));
                                        $menu3['label'] = $form4->nombre;
                                        $menu2[]=$menu3;
                                        $menu3= array();
                                    }

                                }
                                $menu1[]=$menu2;
                                $menu2= array();
                            }

                        }
                        $menu[]=$menu1;
                        $menu1= array();
							
					}	
					
					if(!empty($menu) and $menu!==null){

						$menu['stylesheet'] = "menu_blue.css";
						$menu['menuID'] = "myMenu";
						$menu['delay'] = 3;
						$vacio=1;
					}
						
					try{
					
						if($vacio=1){
							
								$this->widget('application.extensions.menu.SMenu',
									array(
										'menu'=>$menu
									)
								);
						}else{
						
							echo "<h4>".Yii::app()->user->getState('nombre'). ", usted no tiene ningun permiso configurado</h4>";
							
						}
					}catch(Exception $ex){
						echo "<h4>".Yii::app()->user->getState('nombre'). ", usted no tiene ningun permiso configurado</h4>";
					}
                }
            }
        }
		?>
	</div> <!--mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> <br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>