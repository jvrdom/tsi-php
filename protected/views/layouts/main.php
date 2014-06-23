<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <!-- blueprint CSS framework
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
    [if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->

    <!--
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/css/jquery.fileupload.css" />
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <?php
        $this->widget(
            'booster.widgets.TbNavbar',
                array(
                    'type' => 'inverse',
                    'brand' => 'TSI-PHP',
                    'brandUrl' => '#',
                    'collapse' => true, // requires bootstrap-responsive.css
                    'fixed' => 'top',
                    'fluid' => true,
                    'items' => array(
                        array(
                            'class' => 'booster.widgets.TbMenu',
                            'type' => 'navbar',
                            'items' => array(
                                array('label' => 'Home', 'url' => 'http://localhost/tsi-php/index.php', 'active' => true),
                                array('label'=> 'Permisos', 'url'=>array('/rights'),'visible' => Yii::app()->user->checkAccess('Admin')),
                            ),
                        ),
                        array(
                            'class' => 'booster.widgets.TbMenu',
                            'type' => 'navbar',
                            'htmlOptions' => array('class' => 'pull-right'),
                            'items' => array(
                              array(
                                 'label' =>'Gestión de Usuarios',
                                 'visible' => Yii::app()->user->checkAccess('Administrativo'), 
                                 'items' => array(
                                    array('label' => 'Crear Usuario', 'url'=>array('/user/create')),
                                    array('label' => 'Listado de Usuarios', 'url'=>array('/user')),
                                    array('label' => 'Administración', 'url'=>array('/user/admin')),
                                 )
                              ),
                              array(
                                 'label' =>'Gestión de Clientes',
                                 'visible' => Yii::app()->user->checkAccess('Agente'), 
                                 'items' => array(
                                    array('label' => 'Crear Clientes', 'url'=>array('/cliente/create')),
                                    array('label' => 'Listado de Clientes', 'url'=>array('/cliente')),
                                    array('label' => 'Administración', 'url'=>array('/cliente/admin')),
                                 )
                              ),
                              array(
                                 'label' =>'Gestión de Inmuebles',
                                 'visible' => Yii::app()->user->checkAccess('Agente'), 
                                 'items' => array(
                                    array('label' => 'Crear Inmueble', 'url'=>array('/inmueble/create')),
                                    array('label' => 'Listado de Inmuebles', 'url'=>array('/inmueble')),
                                    array('label' => 'Administración', 'url'=>array('/inmueble/admin')),
                                 )
                              ),
                              array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                              array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                            ),
                        ),
                    ),
                )
        );
    ?>
<div class="container">
  <?php echo $content; ?>
</div>
<div class="clear"></div>

<div class="footer">
    <div class="container text-center">
        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div>
</div><!-- footer -->

<!-- Javascript -->
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/vendor/jquery.ui.widget.js"></script>
    <script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
    <script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/jquery.iframe-transport.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/jquery.fileupload.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/jquery.fileupload-image.js"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/jquery.fileupload-audio.js"></script>
    <!-- The File Upload video preview plugin -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/jquery.fileupload-video.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/jquery.fileupload-validate.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/jquery.fileupload-ui.js"></script>
    <!-- The main application script -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryfileupload/js/main.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.jcarousel.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jcarousel.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.js"></script>

</body>
</html>
