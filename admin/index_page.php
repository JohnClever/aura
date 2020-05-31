
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">

        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" href="css/fontawesome/css/all.css">
        <link rel="stylesheet" href="DataTables/datatables.css">
        <link rel="stylesheet" href="css/YouTubePopUp.css">
        <link href="css/main.cba69814a806ecc7945a.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/jquery.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="DataTables/datatables.js"></script>
        <script src="js/YouTubePopUp.jquery.js"></script>
        <script src="js/main.js"></script>
        <script src="js/form.js"></script>
    

        <title>Welcome  <!-- php echo name clean the name its default--> Jay-Tech</title>
    </head>
    <body>
    <style>
    .err {
        color: red !important;
    }

    .succ {
        color: green !important;
    } 

    </style>
        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div style="color: black;font-weight: 700;">Admin Dashboard _ AURA</div>

                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="app-header__content">
                    <div class="app-header-right">
                        <div class="header-dots">

                        </div>
                        
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                <img width="42" class="rounded-circle" src="../images/logo-1.png" alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-menu-header">
                                                    <div class="dropdown-menu-header-inner bg-info">
                                                        <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                        <div class="menu-header-content text-left">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                            src=""
                                                                            alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading"> <!-- php echo name clean the name its default--> Jay-Tech</div>
                                                                        <div class="widget-subheading opacity-8">A short profile description
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right mr-2">
                                                                        <button class="logout btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left  ml-3 header-user-info">
                                        <div class="widget-heading">
                                           <!-- php echo name clean the name its default--> Jay-Tech
                                        </div>
                                        <div class="widget-subheading">
                                            Admin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>    
            <div class="app-main">
                    <div class="app-sidebar sidebar-shadow">
                        <div class="app-header__logo">
                            <div class="logo-src"></div>
                            <div class="header__pane ml-auto">
                                <div>
                                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="app-header__mobile-menu">
                            <div>
                                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                        </div>
                        <!-- Menu List(Begin)-->    
                        <div class="scrollbar-sidebar">
                            <div class="app-sidebar__inner">
                                <ul class="vertical-nav-menu">
                                    <li class="app-sidebar__heading">Menu</li>
                                    <li class="">
                                    <!-- mm-active -->
                                        <a href="#">
                                            <i class="metismenu-icon">&#8226;</i>
                                            Dashboards
                                            <i class="metismenu-state-icon">&#8595;</i>
                                        </a>
                                        <ul style="cursor: pointer">
                                            <li><a href="index.php" class="data_d">Home</a></li>
                                            <li><a class="data_c">Messages</a></li>
                                            <li><a class="data_t">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon">&#8226;</i>
                                                Add To Database
                                            <i class="metismenu-state-icon">&#8595;</i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a class="data_tf"">
                                                    <i class="metismenu-icon"></i>
                                                    Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a class="data_sf">
                                                    <i class="metismenu-icon">
                                                    </i>Images
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Menu List(End)-->
                    </div> 
                    <div class="form_update_e" style="position: fixed;">

                    </div> 
                    <div class="app-main__outer">
                        <!-- Change and swaps - begin --> 
                        <div class="app-main__inner">




                        <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-map">
                </i>
            </div>
            <div>Dashboard
                <div class="page-title-subheading">

                </div>
            </div>
        </div>    
    </div>
</div>           
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Messages</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><!-- php number count clean the zero its default--> 0</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">FAQs</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><!-- php number count clean the zero its default--> 0</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Events</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><!-- php number count clean the zero its default--> 0</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Comments</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><!-- php number count clean the zero its default--> 0</span></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
               



                        
                        </div>
                        <!-- change and swaps - end -->
    <div class="app-wrapper-footer">
        <div class="app-footer">
        <div class="app-footer__inner">
            <div class="app-footer-right">
                <ul class="header-megamenu nav">
                    <li class="nav-item">
                        <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                            Footer Menu   
                            <i style="margin-left: 4px" class="fa fa-angle-up opacity-8"></i>
                        </a>
                        <div class="rm-max-width rm-pointers">
                            <div class="d-none popover-custom-content">
                                <ul class="nav flex-column">
                                    <li class="nav-item-header nav-item">Overview</li>
                                    <li class="nav-item">
                                        <a style="width: 200px" class="data_d nav-link">
                                        <i class="nav-link-icon fa fa-hand-point-right"> </i><span>FAQs</span>
                                        <div style="position: absolute;right: 0;" class="ml-lg badge badge-pill"> <!-- php number count clean the zero its default--> 0</div>
                                        </a>
                                   </li>
                                   <li class="nav-item">
                                        <a style="width: 200px" class="data_d nav-link">
                                        <i class="nav-link-icon fa fa-hand-point-right"> </i><span>Massages</span>
                                        <div style="position: absolute;right: 0;" class="ml-lg badge badge-pill"><!-- php number count clean the zero its default--> 0</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="width: 200px" class="data_d nav-link">
                                        <i class="nav-link-icon fa fa-hand-point-right"> </i><span>Events</span>
                                        <div style="position: absolute;right: 0;" class="ml-lg badge badge-pill"><!-- php number count clean the zero its default--> 0</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="width: 200px" class="data_c nav-link">
                                        <i class="nav-link-icon fa fa-hand-point-right"></i><span>Images</span>
                                            <div style="position: absolute;right: 0;" class="ml-lg badge badge-pill"><!-- php number count clean the zero its default--> 0</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>    
                    </div>
            </div>
        </div>

        <div class="app-drawer-overlay d-none animated fadeIn"></div>
        <script type="text/javascript" src="assets/scripts/main.cba69814a806ecc7945a.js"></script>
    </body>

</html>
