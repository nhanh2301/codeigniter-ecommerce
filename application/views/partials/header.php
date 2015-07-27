<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ansilvex</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="/assets/css/price-range.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/assets/images/ico/favicon.ico">
</head>
<body>

<header id="header">
    <div class="messages">
        <div class="message success added-to-cart">
            <p>Produsul a fost adaugat cu succes.</p>
        </div>

        <div class="message success removed-from-cart">
            <p>Produsul a fost sters cu succes.</p>
        </div>

        <?php if ($this->session->flashdata('success')) { ?>
            <div class="message success" style="display:block">
                <p><?= $this->session->flashdata('success') ?></p>
            </div>
        <?php } ?>

        <?php if ($this->session->flashdata('error')) { ?>
            <div class="message error" style="display:block">
                <p><?= $this->session->flashdata('error') ?></p>
            </div>
        <?php } ?>
    </div>

    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <?php if (!empty($general->mobile)) { ?>
                                <li><a href="#"><i class="fa fa-phone"></i> <?php echo $general->mobile; ?></a></li>
                            <?php } ?>
                            <?php if (!empty($general->telephone)) { ?>
                                <li><a href="#"><i class="fa fa-phone"></i> <?php echo $general->telephone; ?></a></li>
                            <?php } ?>
                            <?php if (!empty($general->email)) { ?>
                                <li><a href="#"><i class="fa fa-envelope"></i> <?php echo $general->email; ?></a></li>
                            <?php } ?>
                            <?php if (!empty($general->address)) { ?>
                                <li><a href="#"><i class="fa fa-street-view"></i> <?php echo $general->address; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <?php if (!empty($general->link_facebook)) { ?>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <?php } ?>
                            <?php if (!empty($general->link_linkedin)) { ?>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <?php } ?>
                            <?php if (!empty($general->link_google)) { ?>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/">Ansilvex</a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                Limba
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('language/change/romanian'); ?>">Romana</a></li>
                                <li><a href="<?php echo site_url('language/change/russian'); ?>">Rusa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo site_url('profile'); ?>"><i class="fa fa-user"></i> Contul tau</a>
                            </li>
                            <li><a href="<?php echo site_url('cart'); ?>"><i class="fa fa-shopping-cart"></i> Cosul tau
                                    <span
                                        class="cart-items"><?php echo !empty($cart) ? '(' . count($cart) . ')' : ''; ?></span></a>
                            </li>
                            <li><a href="<?php echo site_url('login'); ?>"><i class="fa fa-lock"></i> Logare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Deschide</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?php echo site_url('products'); ?>" >Produse</a></li>

                            <?php if (!empty($pages)) { ?>
                                <?php foreach ($pages as $page) { ?>
                                    <li>
                                        <a href="<?php echo site_url(url_title($page->title) . '/' . $page->id); ?>"><?php echo $page->title; ?></a>
                                    </li>
                                <?php } ?>
                            <?php } ?>

                            <li><a href="<?php echo site_url('contact'); ?>">Contacteaza-ne</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Cauta..."/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>