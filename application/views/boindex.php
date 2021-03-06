<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Zoofilm - <?php echo $titre ;?></title>
        <link type="text/css" href="<?php echo base_url();?>/assets2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/assets2/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/assets2/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/assets2/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Adm-Zoofilm </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <!-- <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul> -->
                        <!-- <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form> -->
                        <ul class="nav pull-right">
                            <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li> -->
                            <li><a href="<?php echo base_url('admin/deconnection.html');?>">Deconnexion </a></li>
                            <!-- <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url();?>/assets/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo site_url('Controle/deconnection');?>">Deconnexion</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <!-- <li class="active"><a href="<?php echo site_url('Controle/index');?>"><i class="menu-icon icon-dashboard"></i>Accueil -->
                                </a></li>
                                
                                <li><a href="<?php echo base_url('admin/ajoutfilm.html');?>"><i class="menu-icon icon-book"></i>Ajouter un film</a>
                                </li>

                                <li><a href="<?php echo base_url('admin/gestionfilm.html');?>"><i class="menu-icon icon-book"></i>Gerer les films</a>
                                </li>

                                <!-- <li><a href="<?php echo site_url('Controle/gestionfilm');?>"><i class="menu-icon icon-book"></i>Programmes</a>
                                </li> -->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
                    <?php if(isset($page))
                    { 
                        include($page.'.php');

                    }  ?>
                    

                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
            <b class="copyright">&copy; 2019 Adm-Zoofilm - Zoofilm.com </b> By Rakotonanahary Nasandratra ; P10A ; Numero 25
            </div>
        </div>
        <script src="<?php echo base_url();?>/assets2/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets2/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets2/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets2/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets2/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets2/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets2/scripts/common.js" type="text/javascript"></script>
      
    </body>
