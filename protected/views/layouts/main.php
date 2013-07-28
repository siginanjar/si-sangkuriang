<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
    <!-- the styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/nivo-slider/themes/default/default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/nivo-slider/nivo-slider.css" >
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox/css/lightbox.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/template.css">   
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style1.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style2" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style2.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style3" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style3.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style4" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style4.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style5" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style5.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style6" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style6.css" />
    
    
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/swfobject/swfobject.js"></script>
	<script type="text/javascript" src="js/lightbox/js/lightbox.js"></script>
    <!-- style switcher -->
    <script type="text/javascript" src="js/styleswitcher.js"></script>
    
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><h2><?php echo CHtml::encode(Yii::app()->name); ?></h2></div>
	</div><!-- header -->
    
    <div id="slider">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/siswa_guru.png"/>
    </div>

	<div id="navigation-main">
		<?php 
        //$this->widget('zii.widgets.CMenu',array(
//			'items'=>array(
//				array('label'=>'Home', 'url'=>array('/site/index')),				
//				array('label'=>'Siswa', 'url'=>array('/siswa/index'), 'visible'=>!Yii::app()->user->isGuest),
//				array('label'=>'Absensi', 'url'=>array('/absensi/index'), 'visible'=>!Yii::app()->user->isGuest),
//				array('label'=>'Kelas', 'url'=>array('/kelas/index'), 'visible'=>!Yii::app()->user->isGuest),
//				array('label'=>'Guru', 'url'=>array('/guru/index'), 'visible'=>!Yii::app()->user->isGuest),
//				array('label'=>'Nilai', 'url'=>array('/nilai/index'), 'visible'=>!Yii::app()->user->isGuest),
//				array('label'=>'Mata Pelajaran', 'url'=>array('/mataPelajaran/index'), 'visible'=>!Yii::app()->user->isGuest),
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//				array('label'=>'Contact', 'url'=>array('/site/contact')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//			),
//		)); 
        include"navigation.php"
        ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
        <div class="footer" align="center">
        		Copyright &copy; <?php echo date('Y'); ?> by Wilujeng Sumping<br/>
        		All Rights Reserved.<br/>
        		Powered by <a href="#">Cigadung Soft</a>
    	</div>
    </footer><!-- footer -->

</div><!-- page -->

</body>
</html>
