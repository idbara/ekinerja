<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">
    <title><?php echo $title; ?></title>
    <!--Core CSS -->
    <link href="<?= base_url() ?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/clndr.css" rel="stylesheet">
    <!-- Custom CSS -->
    <?php if(isset($custom_css)) echo $custom_css; ?>
    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style-responsive.css" rel="stylesheet"/>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="<?= site_url("") ?>" class="logo">
        E-Kinerja
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?= base_url() ?>assets/images/avatar1_small.jpg">
                <span class="username"><?php echo $this->session->userdata('username'); ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?= site_url("user/profile") ?>"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="<?= site_url("user/change_password") ?>"><i class="fa fa-cog"></i> Change Password</a></li>
                <li><a href="<?= site_url("auth/logout") ?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?= site_url() ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <?php if($this->session->userdata('level') == 'Kepala') {?>
                <li>
                    <a href="<?= site_url('penilaian') ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Penilaian</span>
                    </a>
                </li>
                <?php } ?>
                <?php if($this->session->userdata('level') == 'Staff') {?>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Kegiatan</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?= site_url("kinerja/createKegiatan") ?>">Input Kegiatan</a></li>
                        <li><a href="<?= site_url("kinerja") ?>">Semua Kegiatan</a></li>
                        <li><a href="<?= site_url("kinerja/disetujui") ?>">Kegiatan Disetujui</a></li>
                        <li><a href="<?= site_url("kinerja/ditolak") ?>">Kegiatan Ditolak</a></li>
                    </ul>
                </li>
                <?php } ?>
                <?php if($this->session->userdata('level') == 'Administrator') {?>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Master</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?= site_url("jenkin") ?>">Master Jenis Kegiatan</a></li>
                        <li><a href="<?= site_url("user") ?>">Master Pengguna</a></li>
                    </ul>
                </li>
                <?php } ?>
                <!--<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>E-Kinerja</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?= site_url("kinerja/input_kegiatan") ?>">Input Kegiatan</a></li>
                        <li><a href="<?= site_url("kinerja/logout") ?>"></a></li>
                        <li><a href="<?= site_url("kinerja/logout") ?>">Input Kegiatan</a></li>
                        <li><a href="<?= site_url("kinerja/logout") ?>">Input Kegiatan</a></li>
                    </ul>
                </li>-->
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">