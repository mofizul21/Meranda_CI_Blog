<html>

<head>
    <link href="<?= base_url() ?>assets/css/bootstrap3.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?= base_url() ?>assets/css/dash_css.css" rel="stylesheet" id="bootstrap-dash-css">
    <script src="<?= base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.3.4.1.js"></script>
    <script src="<?= base_url() ?>assets/js/dash_js.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
</head>

<body>

    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" target="_blank" href="<?= base_url() ?>">
                    <h2>View Site</h2>
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class=" nav navbar-right top-nav">
                <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url() ?>dashboard/edituser"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url() ?>dashboard/logout"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="<?= base_url() ?>dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-cog"></i> General <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-1" class="collapse">
                            <li><a href="<?= base_url() ?>general/addlogo"><i class="fa fa-angle-double-right"></i> Logo and Favicon</a></li>
                            <li><a href="<?= base_url() ?>general/addsocial"><i class="fa fa-angle-double-right"></i> Social Links</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Extra CSS</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-image"></i> Sliders <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                            <li><a href="<?= base_url() ?>slider/addslider"><i class="fa fa-angle-double-right"></i> Add Slider</a></li>
                            <li><a href="<?= base_url() ?>slider/allslider"><i class="fa fa-angle-double-right"></i> All Sliders</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-copy"></i> Pages <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-3" class="collapse">
                            <li><a href="<?= base_url() ?>page/addpage"><i class="fa fa-angle-double-right"></i> Add Page</a></li>
                            <li><a href="<?= base_url() ?>page/allpage"><i class="fa fa-angle-double-right"></i> Manage Pages</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fa fa-fw fa-clipboard"></i> Posts <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-4" class="collapse">
                            <li><a href="<?= base_url() ?>post/addpost"><i class="fa fa-angle-double-right"></i> Add Post</a></li>
                            <li><a href="<?= base_url() ?>post/allpost"><i class="fa fa-angle-double-right"></i> Manage Posts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-5"><i class="fa fa-fw fa-tags"></i> Categories <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-5" class="collapse">
                            <li><a href="<?= base_url() ?>category/addcategory"><i class="fa fa-angle-double-right"></i> Add Category</a></li>
                            <li><a href="<?= base_url() ?>category/allcategories"><i class="fa fa-angle-double-right"></i> Manage Categories</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>