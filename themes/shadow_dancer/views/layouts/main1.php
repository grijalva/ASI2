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
		<div class="topnav_text"><a href='#'>Home</a> | <a href='#'>My Account</a> | <a href='#'>Settings</a> | <a href='#'>Logout</a> </div>
	</div>
	<div id="header">
		<div id="logo"><a href="?"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.jpg" width="243px" height="202px"></img></a><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
    <!--
<?php /*$this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Dashboard', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'test')),
                array('label'=>'Theme Pages',
                  'items'=>array(
                    array('label'=>'Graphs & Charts', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
					array('label'=>'Form Elements', 'url'=>array('/site/page', 'view'=>'forms')),
					array('label'=>'Interface Elements', 'url'=>array('/site/page', 'view'=>'interface')),
					array('label'=>'Error Pages', 'url'=>array('/site/page', 'view'=>'Demo 404 page')),
					array('label'=>'Calendar', 'url'=>array('/site/page', 'view'=>'calendar')),
					array('label'=>'Buttons & Icons', 'url'=>array('/site/page', 'view'=>'buttons_and_icons')),
                  ),
                ),
                array('label'=>'Gii Generated Module',
                  'items'=>array(
                    array('label'=>'Items', 'url'=>array('/theme/index')),
                    array('label'=>'Create Item', 'url'=>array('/theme/create')),
					array('label'=>'Manage Items', 'url'=>array('/theme/admin')),
                  ),
                ),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
    )); */?> --->
	<div id="mainmenu">
    
		<?php 
		$this->widget('application.extensions.menu.SMenu',
array(
"menu"=>array(
 /*Este es menu1*/ array("url"=>array(
               "route"=>"/product/create"),
               "label"=>"Sspiner",
 /* Menu 2*/         array("url"=>array(
                       "route"=>"/product/create"),
                       "label"=>"Create product"),
          array("url"=>array(
                      "route"=>"/product/list"),
                      "label"=>"Product List",),
          array("url"=>"",
                       "label"=>"View Products",
          array("url"=>array(
                       "route"=>"/product/show"),
                       "label"=>"Product 3"),
            array("url"=>array(
                         "route"=>"/product/show",
                         "params"=>array("id"=>4)),
                         "label"=>"Product 4",
                array("url"=>array(
                             "route"=>"/product/show",
                             "params"=>array("id"=>5)),
                             "label"=>"Product 5")))),
          array("url"=>array(
                       "route"=>"/event/create"),
                       "label"=>"Scalendar"),
          array("url"=>array(),
                       "label"=>"Admin",
              array("url"=>array(
                           "route"=>"/event/admin"),
                           "label"=>"Scalendar Admin"),
                  array("url"=>array(
                               "route"=>"/product/admin"),
                               "label"=>"Sspinner Admin"),
                  array("url"=>array(
                               "route"=>"/product/admin"),
                               "label"=>"Disabled Link",
                               "disabled"=>true)),
          array("url"=>array(),
                       "label"=>"Documentation",
              array("url"=>array(
                           "link"=>"http://www.yiiframework.com",
                           "htmlOptions"=>array("target"=>"_BLANK")),
                           "label"=>"Yii Framework"),
              array("url"=>array(
                           "route"=>"site/spinnerDoc"),
                           "label"=>"Sspinner"),
              array("url"=>array(
                           "route"=>"site/calendarDoc"),
                           "label"=>"Scalendar"),
              array("url"=>array(
                           "route"=>"site/menuDoc"),
                           "label"=>"Smenu"),
                )
          ),
"stylesheet"=>"menu_blue.css",
"menuID"=>"myMenu",
"delay"=>3
)
);
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