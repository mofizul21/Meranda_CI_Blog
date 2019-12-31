<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meranda &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php foreach ($logotext as $row) : ?>
        <link rel="shortcut icon" href="<?= base_url() ?>assets/images/<?php echo $row['favicon']; ?> ">
    <?php endforeach; ?>
    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css">
    <link href="<?= base_url() ?>assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 d-flex">
                        <a href="<?= base_url() ?>" class="site-logo">
                            <?php foreach ($logotext as $row) : ?>
                                <?php echo $row['logo']; ?>
                            <?php endforeach; ?>
                        </a>

                        <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>

                    </div>
                    <div class="col-12 col-lg-6 ml-auto d-flex">
                        <div class="ml-md-auto top-social d-none d-lg-inline-block">
                            <?php foreach ($socialLinks as $socialLink) : ?>

                                <?php if ($socialLink['facebook']) : ?>
                                    <a href="<?php echo $socialLink['facebook'] ?>" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                                <?php endif; ?>

                                <?php if ($socialLink['twitter']) : ?>
                                    <a href="<?php echo $socialLink['twitter'] ?>" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                                <?php endif; ?>

                                <?php if ($socialLink['instagram']) : ?>
                                    <a href="<?php echo $socialLink['instagram'] ?>" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                                <?php endif; ?>

                                <?php if ($socialLink['youtube']) : ?>
                                    <a href="<?php echo $socialLink['youtube'] ?>" class="d-inline-block p-3"><span class="icon-youtube"></span></a>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </div>
                        <form action="#" class="search-form d-inline-block">

                            <div class="d-flex">
                                <input type="email" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                            </div>
                        </form>


                    </div>
                    <div class="col-6 d-block d-lg-none text-right">

                    </div>
                </div>
            </div>




            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mr-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    <li class="active">
                                        <a href="<?= base_url() ?>" class="nav-link text-left">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>post" class="nav-link text-left">Blogs</a>
                                    </li>
                                    <?php foreach ($pages as $page) : ?>
                                        <li>
                                            <a href="<?= base_url() ?>page/view/<?= $page['slug'] ?>" class="nav-link text-left"><?= $page['title'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                    <li><a href="<?= base_url() ?>contact" class="nav-link text-left">Contact</a></li>
                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>

            </div>

        </div>