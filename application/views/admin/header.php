<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Admin | Ansilvex</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="/assets/admin/css/app.v2.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/admin/css/font.css" type="text/css" cache="false"/>
    <!--[if lt IE 9]>
    <script src="/assets/admin/js/ie/respond.min.js" cache="false"></script>
    <script src="/assets/admin/js/ie/html5.js" cache="false"></script>
    <script src="/assets/admin/js/ie/fix.js" cache="false"></script>
    <![endif]-->
</head>
<body>
<section class="hbox stretch">
    <aside class="bg-primary aside-sm" id="nav">
        <section class="vbox">
            <header class="dker nav-bar nav-bar-fixed-top">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"><i class="fa fa-bars"></i> </a>
                <a href="#" class="nav-brand" data-toggle="fullscreen"><?php echo !empty($general->logo_text) ? $general->logo_text : 'Admin'; ?></a>
            </header>
            <section>
                <nav class="nav-primary hidden-xs">
                    <ul class="nav">
                        <li class="<?php echo in_array('dashboard', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/dashboard'); ?>"><span>Statistici</span></a></li>
                        <li class="<?php echo in_array('general', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/general'); ?>"><span>Date generale</span></a></li>
                        <li class="<?php echo in_array('categories', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/categories'); ?>"><span>Categorii</span></a></li>
                        <li class="<?php echo in_array('products', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/products'); ?>"><span>Produse</span></a></li>
                        <li class="<?php echo in_array('orders', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/orders'); ?>"><span>Comenzi</span></a></li>
                        <li class="<?php echo in_array('pages', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/pages'); ?>"><span>Pagini</span></a></li>
                        <li class="<?php echo in_array('pages', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/filters'); ?>"><span>Filtre</span></a></li>
                        <li class="<?php echo in_array('pages', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/comments'); ?>"><span>Comentarii</span></a></li>
                        <li class="<?php echo in_array('pages', $this->uri->segment_array()) ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/newsletter'); ?>"><span>Newsletter</span></a></li>
                        <li class="confirm"><a href="<?php echo site_url('admin/users/logout'); ?>"><span>Iesire</span></a></li>
                    </ul>
                </nav>

                <div class="bg-danger wrapper hidden-vertical animated fadeInUp text-sm" style="display:none">
                    <a href="#" data-dismiss="alert" class="pull-right m-r-n-sm m-t-n-sm">
                        <i class="fa fa-times"></i>
                    </a>
                    Salut, bine ai venit in admin pentru Ansilvex.
                </div>
            </section>
        </section>
    </aside>

    <section id="content">
        <section class="vbox">
            <header class="header bg-white b-b"><p></p></header>

            <section class="scrollable wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                <i class="fa fa-check-sign"></i> <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                <i class="fa fa-ban-circle"></i>
                                <strong>Oh snap!</strong> <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>