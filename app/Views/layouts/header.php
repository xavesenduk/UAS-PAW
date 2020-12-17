<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dashboard - Studio Multimedia
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
            <div class="logo"><a href="" class="simple-text logo-normal">
                    Studio Multimedia
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <?php
                    $current = $nav;
                    $brand = '';
                    $nav1 = '';
                    $nav2 = '';
                    $nav3 = '';
                    $nav4 = '';
                    if ($current == 'index') {
                        $nav1 = ' active ';
                        $brand = 'Dashboard';
                    } else if ($current == 'pinjam') {
                        $nav2 = ' active ';
                        $brand = 'Peminjaman Barang';
                    } else if ($current == 'kelolapinjam') {
                        $nav2 = ' active ';
                        $brand = 'Formulir Peminjaman';
                    } else if ($current == 'ruang') {
                        $nav3 = ' active ';
                        $brand = 'Penggunaan Ruang';
                    } else if ($current == 'kelolaruang') {
                        $nav3 = ' active ';
                        $brand = 'Formulir Penggunaan';
                    } else if ($current == 'inventaris') {
                        $nav4 = ' active ';
                        $brand = 'Inventaris';
                    } else if ($current == 'kelolainventaris') {
                        $nav4 = ' active ';
                        $brand = 'Formulir Inventaris';
                    }
                    ?>
                    <li class="nav-item <?php echo $nav1; ?>">
                        <a class="nav-link" href="<?php echo base_url('studio/index'); ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $nav2; ?>">
                        <a class="nav-link" href="<?php echo base_url('studio/pinjam'); ?>">
                            <i class="material-icons">arrow_circle_up</i>
                            <p>Peminjaman Barang</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $nav3; ?>">
                        <a class="nav-link" href="<?php echo base_url('studio/ruang'); ?>">
                            <i class="material-icons">videocam</i>
                            <p>Penggunaan Ruang</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $nav4; ?>">
                        <a class="nav-link" href="<?php echo base_url('studio/inventaris'); ?>">
                            <i class="material-icons">content_paste</i>
                            <p>Inventaris</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)"><?php echo $brand; ?></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i> <?php echo $curuser['name']; ?>
                                    <p class="d-lg-none d-md-block">
                                        Akun
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/logout">Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->