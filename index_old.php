<?php
    session_start(); 
    if(!isset($_SESSION['a_id'])){
        header("location: login.php");
    }
    include dirname(__FILE__).DIRECTORY_SEPARATOR.'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" type="image/png" href="/imgs/favicon.png" /> -->
        <title>Home</title>

        <!-- inject:css -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- endinject -->

        <!-- Main Style  -->
        <link rel="stylesheet" href="dist/css/main.css">

        <!-- Rickshaw Chart Depencencies -->
        <link rel="stylesheet" href="bower_components/rickshaw/rickshaw.min.css">

        <script src="assets/js/modernizr-custom.js"></script>
    </head>
    <body>

        <div id="ui" class="ui">

            <!--header start-->
            <header id="header" class="ui-header">

                <div class="navbar-header">
                    <!--logo start-->
                    <a href="index.html" class="navbar-brand">
                        <span class="logo"><img src="imgs/logo-dark.png" alt=""/></span>
                        <span class="logo-compact"><img src="imgs/logo-icon-dark.png" alt=""/></span>
                    </a>
                    <!--logo end-->
                </div>

                <div class="search-dropdown dropdown pull-right visible-xs">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-search"></i></button>
                    <div class="dropdown-menu">
                        <form >
                            <input class="form-control" placeholder="Search here..." type="text">
                        </form>
                    </div>
                </div>

                <div class="navbar-collapse nav-responsive-disabled">

                    <!--toggle buttons start-->
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="toggle-btn" data-toggle="ui-nav" href="">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- toggle buttons end -->

                    <!--search start-->
                    <form class="search-content hidden-xs" >
                        <button type="submit" name="search" class="btn srch-btn">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" class="form-control" name="keyword" placeholder="Search here...">
                    </form>
                    <!--search end-->

                    <!--notification start-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge">5</span>
                            </a>
                            <!--dropdown -->
                            <ul class="dropdown-menu dropdown-menu--responsive">
                                <div class="dropdown-header">Notifications (12)</div>
                                <ul class="Notification-list Notification-list--small niceScroll list-group">
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--danger pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>
                                                <p class="Notification__highlight-time">1.2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--success pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>
                                                <p class="Notification__highlight-time">2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                <p class="Notification__highlight-time">1 day ago</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>
                                                <p class="Notification__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--info pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-database"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Database Error</b></p>
                                                <p class="Notification__highlight-time">2 days ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--danger pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>
                                                <p class="Notification__highlight-time">1.2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--success pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>
                                                <p class="Notification__highlight-time">2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-footer"><a href="">View more</a></div>
                            </ul>
                            <!--/ dropdown -->
                        </li>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge">5</span>
                            </a>
                            <!--dropdown -->
                            <ul class="dropdown-menu dropdown-menu--responsive">
                                <div class="dropdown-header">Messages (12)</div>
                                <ul class="Message-list niceScroll list-group">
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a2.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Lubida Teresa</span>
                                                <p class="Message__highlight-excerpt">Hello there! Can you send me a photo please?</p>
                                                <p class="Message__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--unread" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a1.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Sara Souaidan</span>
                                                <p class="Message__highlight-excerpt">Hello there!</p>
                                                <p class="Message__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Addy Osmany</span>
                                                <p class="Message__highlight-excerpt">Blah Blah Blah</p>
                                                <p class="Message__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Picaso Patel</span>
                                                <p class="Message__highlight-excerpt">Bhai, are you there?</p>
                                                <p class="Message__highlight-time">2 years ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Bengali Tiger</span>
                                                <p class="Message__highlight-excerpt">Mu ha ha</p>
                                                <p class="Message__highlight-time">10 years ago</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-footer"><a href="">View more</a></div>
                            </ul>
                            <!--/ dropdown -->
                        </li>

                        <li class="dropdown dropdown-usermenu">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="user-avatar"><img src="imgs/a0.jpg" alt="..."></div>
                                <span class="hidden-sm hidden-xs">John Doe</span>
                                <!--<i class="fa fa-angle-down"></i>-->
                                <span class="caret hidden-sm hidden-xs"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="#"><i class="fa fa-cogs"></i>  Settings</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="#"><i class="fa fa-commenting-o"></i>  Feedback</a></li>
                                <li><a href="#"><i class="fa fa-life-ring"></i>  Help</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li>
                            <a data-toggle="ui-aside-right" href=""><i class="glyphicon glyphicon-option-vertical"></i></a>
                        </li>
                    </ul>
                    <!--notification end-->

                </div>

            </header>
            <!--header end-->

            <!--sidebar start-->
            <aside id="aside" class="ui-aside">
                <ul class="nav" ui-nav>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-home"></i><span> Dashboard </span></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="index.html"><span>Dashboard</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="layouts.html"><i class="fa fa-object-group"></i><span>Layouts <small class="label label-success">Special</small></span></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="layouts.html"><span>Layouts</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope-o"></i><span> Mailbox </span></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="mailbox.html"><span>Mailbox</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="note.html"><i class="fa fa-file-text-o"></i><span> Notes <small class="label label-warning">Apps</small></span></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="note.html"><span>Notes</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o"></i><span>Charts</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href=""><span>Charts</span></a></li>
                            <li><a href="chart-high.html"><span>High Charts</span></a></li>
                            <li><a href="chart-rickshaw.html"><span>Rickshaw Charts</span></a></li>
                            <li><a href="chart-c3.html"><span>C3 Charts</span></a></li>
                            <li><a href="chart-nvd3.html"><span>NVD3 Charts</span></a></li>
                            <li><a href="chart-flot.html"><span>Flot Charts </span></a></li>
                            <li><a href="chart-morris.html"><span>Morris Charts</span></a></li>
                            <li><a href="chartjs.html"><span>ChartJs</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-snowflake-o"></i><span>UI Elements</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href=""><span>UI Elements</span></a></li>
                            <li><a href="general.html"><span>General </span></a></li>
                            <li><a href="buttons.html"><span>Buttons</span></a></li>
                            <li><a href="typography.html"><span>Typography</span></a></li>
                            <li><a href="tree.html"><span>Tree</span></a></li>
                            <li><a href="nestables.html"><span>Nestables</span></a></li>
                            <li><a href="sliders.html"><span>Sliders</span></a></li>
                            <li><a href="tabs-accordions.html"><span>Tabs &amp; Accordions</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="grids.html"><i class="fa fa-th-large"></i><span>Grid Option</span></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="grids.html"><span>Grid Option</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="font-awesome.html"><i class="fa fa-font-awesome"></i><span>Font Awesome</span></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="font-awesome.html"><span>Font Awesome</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bookmark-o"></i><span>Components <small class="label label-danger">3</small> </span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href=""><span>Components</span></a></li>
                            <li><a href="calendar.html"><span>Calendar</span></a></li>
                            <li><a href="timeline.html"><span>Timeline</span></a></li>
                            <li><a href="panels.html"><span>Panels</span></a></li>
                            <li><a href="toastr-notifications.html"><span>Toastr Notifications</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-table"></i><span>Data Tables</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href=""><span>Data Tables</span></a></li>
                            <li><a href="tables.html"><span>Basic Table </span></a></li>
                            <li><a href="dynamic-table.html"><span>Dynamic Table</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-list-alt"></i><span>Form</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href=""><span>Form</span></a></li>
                            <li><a href="form-layouts.html"><span>Form Layouts </span></a></li>
                            <li><a href="form-advanced.html"><span>Form Advanced</span></a></li>
                            <li><a href="form-wizard.html"><span>Form Wizard</span></a></li>
                            <li><a href="form-validation.html"><span>Form Validation</span></a></li>
                            <li><a href="text-editors.html"><span>Text Editors</span></a></li>
                            <li><a href="inline-editors.html"><span>Inline Editors</span></a></li>
                            <li><a href="dropzone.html"><span>Dropzone</span></a></li>
                            <li><a href="file-upload.html"><span>File Upload</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-television"></i><span>Extra Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href=""><span>Extra Pages</span></a></li>
                            <li><a href="profile.html"><span>Profile</span></a></li>
                            <li><a href="invoice.html"><span>Invoice</span></a></li>
                            <li><a href="login.html"><span>Login</span></a></li>
                            <li><a href="registration.html"><span>Registration</span></a></li>
                            <li><a href="forgot-password.html"><span>Forgot Password</span></a></li>
                            <li><a href="lock-screen.html"><span>Lock Screen</span></a></li>
                            <li><a href="404.html"><span>Error 404</span></a></li>
                            <li><a href="500.html"><span>Error 500</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-server"></i><span>Multilevel</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="#"><span>Multilevel</span></a></li>
                            <li><a href="#"><span>Level One </span></a></li>
                            <li>
                                <!-- <a href=""><span>Level Two </span></a> -->
                                <a href="#"><span>Level One </span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub">
                                    <li><a href="#"><span>Level Two </span></a></li>
                                    <li>
                                        <!-- <a href=""><span>Level Two </span></a> -->
                                        <a href=""><span>Level Two </span><i class="fa fa-angle-right pull-right"></i></a>
                                        <ul class="nav nav-sub">
                                            <li><a href="#"><span>Level Three </span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!--sidebar end-->

            <!--main content start-->
            <div id="content" class="ui-content ui-content-aside-overlay">
                <div class="ui-content-body">

                    <div class="ui-container">

                        <div class="row">
                            <!--task states start-->
                            <div class="col-md-6 col-lg-4 col-sm-6">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Task Statistics
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="row w-states">
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-primary btn-block">
                                                    <span class="value">24</span>
                                                    <span class="info">Task completed</span>
                                                </a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-info btn-block">
                                                    <span class="value">18</span>
                                                    <span class="info">Task ongoing</span>
                                                </a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-success btn-block">
                                                    <span class="value">13</span>
                                                    <span class="info">Task Processing</span>
                                                </a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-danger btn-block">
                                                    <span class="value">02</span>
                                                    <span class="info">Task Failed</span>
                                                </a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-default btn-block margin0">
                                                    <span class="value">14</span>
                                                    <span class="info">Task pending</span>
                                                </a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-default btn-block margin0">
                                                    <span class="value">08</span>
                                                    <span class="info">Upcoming Task</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--task states end-->

                            <!--charts start-->
                            <div class="col-md-6 col-lg-4 col-sm-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div id="stacked-bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <!--charts end-->

                            <!--daily visit start-->
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Daily Visit
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body text-center">
                                        <div class="chart-wrap">
                                            <div id="bar-chart-1"></div>
                                            <small>Laptop</small>
                                        </div>
                                        <div class="chart-wrap">
                                            <div id="bar-chart-2"></div>
                                            <small>iPhone</small>
                                        </div>
                                        <div class="chart-wrap">
                                            <div id="bar-chart-3"></div>
                                            <small>iPad</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading">
                                        Visitor Graph
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body text-center">
                                        <div class="chart-wrap">
                                            <small>visit </small>
                                            <span class="h4">10,090</span>
                                            <div id="line-chart-1"></div>
                                            <small>Page visit</small>
                                        </div>
                                        <div class="chart-wrap">
                                            <small>Unique visitor </small>
                                            <span class="h4">8,129</span>
                                            <div id="line-chart-2"></div>
                                            <small>Avg. visit Duration</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--daily visit end-->

                        </div>

                        <!--states start-->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="panel short-states">
                                    <div class="panel-title">
                                        <h4> <span class="label label-danger pull-right">Daily Income</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <h1>$1,3012</h1>
                                        <div class="text-danger pull-right">53% <i class="fa fa-bolt"></i></div>
                                        <small>Daily income</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel short-states">
                                    <div class="panel-title">
                                        <h4> <span class="label label-info pull-right">Weekly Income</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <h1>$5,534</h1>
                                        <div class="text-primary pull-right">65% <i class="fa fa-level-up"></i></div>
                                        <small>Weekly Income</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel short-states">
                                    <div class="panel-title">
                                        <h4> <span class="label label-warning pull-right">Monthly Income</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <h1>$22,329</h1>
                                        <div class="text-warning pull-right">77% <i class="fa fa-level-down"></i></div>
                                        <small>Monthly Income</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel short-states">
                                    <div class="panel-title">
                                        <h4> <span class="label label-success pull-right">Annual Income</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <h1>$268,188</h1>
                                        <div class="text-success pull-right">88% <i class="fa fa-level-up"></i></div>
                                        <small>Annual Income</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--states end-->

                        <!--task distribution start-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Order Statistics
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="u-relative">
                                            <div id="rickshaw-stacked-bars"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Profit Database
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body-">
                                        <table class="table  table-hover general-table">
                                            <thead>
                                            <tr>
                                                <th> Company</th>
                                                <th class="hidden-phone">Descrition</th>
                                                <th>Profit</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><a href="#">Graphics</a></td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                                <td>1320.00$ </td>
                                                <td><span class="label label-info label-mini">Due</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        ThemeBucket
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                <td>556.00$ </td>
                                                <td><span class="label label-warning label-mini">Due</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        XYZ
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                <td>13240.00$ </td>
                                                <td><span class="label label-success label-mini">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        BCSE
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                <td>3455.50$ </td>
                                                <td><span class="label label-danger label-mini">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">AVC Ltd</a></td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                                <td>110.00$ </td>
                                                <td><span class="label label-primary label-mini">Due</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        Themeforest
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                <td>456.00$ </td>
                                                <td><span class="label label-warning label-mini">Due</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">AVC Ltd</a></td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                                <td>110.00$ </td>
                                                <td><span class="label label-primary label-mini">Due</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        BCSE
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                <td>3455.50$ </td>
                                                <td><span class="label label-danger label-mini">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">AVC Ltd</a></td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                                <td>110.00$ </td>
                                                <td><span class="label label-primary label-mini">Due</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        Themeforest
                                                    </a>
                                                </td>
                                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                <td>456.00$ </td>
                                                <td><span class="label label-warning label-mini">Due</span></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--task distribution end-->

                        <div class="row">
                            <!--task duration start-->
                            <div class="col-md-5 ">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Task Distribution
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="">
                                        <ul class="Notification-list list-group">

                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left" >
                                                        <img src="imgs/a0.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Jonathan Smith</b> and 4 other people like your post “Awesome Bootstrap dashbord”.</p>
                                                        <p class="Notification__highlight-time">1 day ago</p>
                                                    </div>
                                                </a>
                                            </li>


                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a1.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                        <p class="Notification__highlight-time">1 day ago</p>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a0.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>
                                                        <p class="Notification__highlight-time">1 hour ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a2.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                        <p class="Notification__highlight-time">1 day ago</p>
                                                    </div>
                                                </a>
                                            </li>


                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a1.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                        <p class="Notification__highlight-time">1 day ago</p>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a0.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>
                                                        <p class="Notification__highlight-time">1 hour ago</p>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--task duration end-->

                            <!--server load live start-->
                            <div class="col-md-7 ">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Server Load Live
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="">
                                        <div class="u-relative u-clear">
                                            <div id="rickshaw-realtime_y_axis"></div>
                                            <div id="rickshaw-realtime"></div>
                                        </div>
                                        <div class="row panel-body text-center">
                                            <div class="col-xs-4">
                                                <h5>135.14 KB</h5>
                                                <p class="small ">Currently Load</p>
                                            </div>
                                            <div class="col-xs-4">
                                                <h5>54.98 MB</h5>
                                                <p class="small">Average Load</p>
                                            </div>
                                            <div class="col-xs-4">
                                                <h5>10.59 GB</h5>
                                                <p class="small">Total usage</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--server load live end-->

                        </div>

                    </div>

                    <!--right side widget start-->
                    <div class="ui-aside-right " ui-aside-right>

                        <!--customer start-->
                        <div class="aside-widget">
                            <h5>Online Customer</h5>
                            <ul class="contact-list">
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a0.jpg" class="media-object">
                                            <span class="online"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>John Doe</strong>
                                            <small>General Manager at TB</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a1.jpg" class="media-object">
                                            <span class="offline"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Jonathan Smith</strong>
                                            <small>Lead Designer</small>
                                        </div>
                                    </div><!-- media -->
                                </li>

                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a2.jpg" class="media-object">
                                            <span class="busy"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Margarita Rose</strong>
                                            <small>Human Resource Manager</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a0.jpg" class="media-object">
                                            <span class="away"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Mr. Kameron De</strong>
                                            <small>Marketing Officer</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a2.jpg" class="media-object">
                                            <span class="offline"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Mr. Mosa</strong>
                                            <small>Development Manager</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                            </ul>
                        </div>
                        <!--customer end-->

                        <!--stock start-->
                        <div class="aside-widget">
                            <h5>Recent Stocks</h5>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>DOWJ</td>
                                    <td>19,764.00</td>
                                    <td><small class="label label-success">+ 0.08%</small></td>
                                </tr>
                                <tr>
                                    <td>AAPL</td>
                                    <td>116.90</td>
                                    <td><small class="label label-danger">- 0.29%</small></td>
                                </tr>
                                <tr>
                                    <td>SBUX</td>
                                    <td>50.33</td>
                                    <td><small class="label label-warning">+ 0.23%</small></td>
                                </tr>
                                <tr>
                                    <td>NKE</td>
                                    <td>164.00</td>
                                    <td><small class="label label-success">+ 0.08%</small></td>
                                </tr>
                                <tr>
                                    <td>YHOO</td>
                                    <td>764.00</td>
                                    <td><small class="label label-danger">- 0.91%</small></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--stock end-->

                        <!--task start-->
                        <div class="aside-widget">
                            <h5>Task Pending</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Wp Development (66%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-warning">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Dashboard Design (80%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success ">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Marketing (40%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Mobile App Development (33%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="btn btn-sm btn-info btn-block">See All Pending Tasks</a>
                                </li>
                            </ul>
                        </div>
                        <!--task end-->

                    </div>
                    <!--right side widget end-->

                </div>
            </div>
            <!--main content end-->

            <!--footer start-->
            <div id="footer" class="ui-footer">
                2017 &copy; Bootkit by ThemeBucket.
            </div>
            <!--footer end-->

        </div>

        <!-- inject:js -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
        <script src="bower_components/autosize/dist/autosize.min.js"></script>
        <!-- endinject -->

        <!--highcharts-->
        <script src="bower_components/highcharts/highcharts.js"></script>
        <script src="bower_components/highcharts/modules/exporting.js"></script>
        <script src="assets/js/init-highcharts.js"></script>

        <!--sparkline-->
        <script src="bower_components/bower-jquery-sparkline/dist/jquery.sparkline.retina.js"></script>
        <script src="assets/js/init-sparkline.js"></script>

        <!-- Rickshaw Chart Depencencies -->
        <script src="bower_components/rickshaw/vendor/d3.min.js"></script>
        <script src="bower_components/rickshaw/vendor/d3.layout.min.js"></script>
        <script src="bower_components/rickshaw/rickshaw.min.js"></script>
        <script src="assets/js/init-rickshaw.js"></script>


        <!-- Common Script   -->
        <script src="dist/js/main.js"></script>

    </body>
</html>
