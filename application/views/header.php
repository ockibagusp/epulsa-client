<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="UTF-8">
    <title>Epulsa | <?php if (isset($title)){ echo $title; }else{ $title=''; echo 'Dashboard';} ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- TOBA core CSS -->
    <link href="<?php echo base_url('assets/toba.core.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets/dist/css/font-awesome.min.css') ?>" rel="stylesheet"
    type="text/css"/>
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url('assets/dist/css/skins/skin-blue.min.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- TOBA core CSS -->
    <link href="<?php echo base_url('assets/toba.core.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- Date Picker -->
    <link href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url('assets/plugins/cookie/js.cookie.js') ?>" type="text/javascript"></script>
</head>
<body class="skin-blue">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url() ?>" class="logo"><b>Epulsa</b>LTE</a>

        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo (1 == $this->session->userdata('type')) ? 
                                base_url('assets/img/accounts/meteor.png') : 
                                (2 == $this->session->userdata('type')) ? base_url('assets/img/accounts/moon.png') : base_url('assets/img/accounts/mars.png') ?>" class="user-image"
                                 alt="User Image"> 
                                 <span class="hidden-xs">
                                    <?php echo $this->session->userdata('username') ?>                                       
                                 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo (1 == $this->session->userdata('type')) ? 
                                base_url('assets/img/accounts/meteor.png') : 
                                (2 == $this->session->userdata('type')) ? base_url('assets/img/accounts/moon.png') : base_url('assets/img/accounts/mars.png') ?>" class="img-circle"
                                 alt="User Image"> 

                                <p>
                                    <?php echo $this->session->userdata('username') ?> -
                                    <?php echo (1 == $this->session->userdata('type')) ? 'admin' : 'counter' ?>
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">

                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url('logout') ?>"
                                       class="btn btn-default btn-flat">Sign Out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header Navbar: style can be found in header.less -->

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo (1 == $this->session->userdata('type')) ? 
                        base_url('assets/img/accounts/meteor.png') : 
                        (2 == $this->session->userdata('type')) ? base_url('assets/img/accounts/moon.png') : base_url('assets/img/accounts/mars.png') ?>" class="img-circle"
                        alt="User Image"> 
                </div>
                <div class="pull-left info">
                    <p><?php echo $this->session->userdata('username') ?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">NAVIGASI UTAMA</li>
                <li <?php if ('' === $title) echo 'class="active"'?>>
                    <a href="<?php echo base_url() ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <?php if (1 == $this->session->userdata('type')): ?>
                    <!-- menu untuk admin -->
                    <li class="treeview <?php if (strpos($title, 'Akun')) echo 'active'?>">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Kelola Akun</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ('Kelola Akun' == $title) echo 'class="active"'?>>
                                <a href="<?php echo base_url('account') ?>"><i class="fa fa-sitemap">
                                </i> Lihat Semua Akun</a>
                            </li>
                            <li <?php if ('Tambah Akun' == $title) echo 'class="active"'?>>
                                <a href="<?php echo base_url('account/add') ?>" rel="tab"><i class="fa fa-plus-square">
                                </i> Tambah Akun</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview <?php if (strpos($title, 'Bus') && !strpos($title, 'Jadwal')) echo 'active'?>">
                        <a href="#">
                            <!-- fa-map-marker -->
                            <i class="fa fa-road"></i> <span>Kelola Bus</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ('Kelola Bus' == $title) echo 'class="active"'?>>
                                <a href="<?php echo base_url('bus') ?>"><i class="fa fa-sitemap">
                                </i> Lihat Semua Data Bus</a>
                            </li>
                            <li <?php if ('Tambah Data Bus' == $title) echo 'class="active"'?>>
                                <a href="<?php echo base_url('bus/add') ?>"><i class="fa fa-plus-square">
                                </i> Tambah Data Bus</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview <?php if (strpos($title, 'Jadwal')) echo 'active'?>">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Kelola Jadwal Bus</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ('Kelola Jadwal Bus' == $title) echo 'class="active"'?>>
                                <a href="<?php echo base_url('schedule') ?>"><i class="fa fa-sitemap">
                                </i> Lihat Semua Jadwal Bus</a>
                            </li>
                            <li <?php if ('Tambah Jadwal Bus' == $title) echo 'class="active"'?>>
                                <a href="<?php echo base_url('schedule/add') ?>"><i class="fa fa-plus-square">
                                </i> Tambah Jadwal Bus</a>
                            </li>
                        </ul>
                    </li>
                    <!-- / menu untuk admin -->
                <?php elseif (2 == $this->session->userdata('type')): ?>
                    <!--  menu  untuk counter -->
                    <li <?php if ('Order' == $title) echo 'class="active"'?>>
                        <a href="<?php echo base_url('order') ?>">
                            <i class="fa fa-file-text"></i>
                            <span>Transaksi</span>
                        </a>
                    </li>
                    <!-- / menu untuk counter -->
                <?php else: ?>
                    <!--  menu  untuk customer -->
                    <li <?php if ('Order' == $title) echo 'class="active"'?>>
                        <a href="<?php echo base_url('order') ?>">
                            <i class="fa fa-file-text"></i>
                            <span>Order</span>
                        </a>
                    </li>
                    <li <?php if ('Transaksi' == $title) echo 'class="active"'?>>
                        <a href="<?php echo base_url('transaction') ?>">
                            <i class="fa fa-check-square"></i>
                            <span>Transaksi</span>
                        </a>
                    </li>
                    <!-- / menu untuk customer -->
                <?php endif; ?>
            </ul>
        </section>
        <!-- /.sidebar -->   
     </aside>