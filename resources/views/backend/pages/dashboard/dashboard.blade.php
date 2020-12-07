
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AdminKit</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ URL::asset('backend/admin')}}/favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/c3/c3.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ URL::asset('backend/admin')}}/dist/css/theme.min.css">
    <script src="{{ URL::asset('backend/admin')}}/src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<div class="wrapper">
    <header class="header-top" header-theme="light">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <div class="top-menu d-flex align-items-center">
                    <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                    <div class="header-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                        </div>
                    </div>
                    <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                </div>
                <div class="top-menu d-flex align-items-center">
                    <div class="dropdown">

                        <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                            <h4 class="header">Notifications</h4>
                            <div class="notifications-wrap">
                                <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i>
                                            </span>
                                    <span class="media-body">
                                                <span class="heading-font-family media-heading">Invitation accepted</span>
                                                <span class="media-content">Your have been Invited ...</span>
                                            </span>
                                </a>
                                <a href="#" class="media">
                                            <span class="d-flex">
                                                <img src="{{ URL::asset('backend/admin')}}/img/users/1.jpg" class="rounded-circle" alt="">
                                            </span>
                                    <span class="media-body">
                                                <span class="heading-font-family media-heading">Steve Smith</span>
                                                <span class="media-content">I slowly updated projects</span>
                                            </span>
                                </a>
                                <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-calendar"></i>
                                            </span>
                                    <span class="media-body">
                                                <span class="heading-font-family media-heading">To Do</span>
                                                <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                            </span>
                                </a>
                            </div>
                            <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a>
                        <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Message"><i class="ik ik-mail"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Accounts"><i class="ik ik-users"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Sales"><i class="ik ik-shopping-cart"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Purchase"><i class="ik ik-briefcase"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Pages"><i class="ik ik-clipboard"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Chats"><i class="ik ik-message-square"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Contacts"><i class="ik ik-map-pin"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Blocks"><i class="ik ik-inbox"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Events"><i class="ik ik-calendar"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="ik ik-bell"></i></a>
                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="More"><i class="ik ik-more-horizontal"></i></a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="{{ URL::asset('backend/admin')}}/img/user.jpg" alt=""></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ik ik-power dropdown-icon"></i>Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="page-wrap">
        <div class="app-sidebar colored">
            <div class="sidebar-header">
                <a class="header-brand" href="#">
                    <div class="logo-img">
                        <img src="{{ URL::asset('backend/admin')}}/src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
                    </div>
                    <span class="text">ThemeKit</span>
                </a>
                <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
            </div>

            <div class="sidebar-content">
                <div class="nav-container">
                    <nav id="main-menu-navigation" class="navigation-main">
                        <div class="nav-lavel">Navigation</div>
                        <div class="nav-item active">
                            <a><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                        </div>


                        <div class="nav-lavel">Menus</div>
                        <div class="nav-item has-sub">
                            <a href="#"><i class="ik ik-list"></i><span>Manage Slider</span></a>
                            <div class="submenu-content">
                                <a href="#" class="menu-item">View Sliders</a>
                            </div>
                        </div>
                        <div class="nav-item has-sub">
                            <a href="#"><i class="ik ik-list"></i><span>Manage Home</span></a>
                            <div class="submenu-content">
                                <a href="#" class="menu-item">Home</a>
                            </div>
                        </div>

                        <div class="nav-item has-sub">
                            <a href="#"><i class="ik ik-list"></i><span>Manage About</span></a>
                            <div class="submenu-content">
                                <a href="#" class="menu-item">About</a>
                            </div>
                        </div>

                        <div class="nav-item has-sub">
                            <a href="#"><i class="ik ik-list"></i><span>Manage Service</span></a>
                            <div class="submenu-content">
                                <a href="#" class="menu-item">Service</a>
                            </div>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h6>Bookmarks</h6>
                                        <h2>1,410</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-award"></i>
                                    </div>
                                </div>
                                <small class="text-small mt-10 d-block">6% higher than last month</small>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h6>Likes</h6>
                                        <h2>41,410</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-thumbs-up"></i>
                                    </div>
                                </div>
                                <small class="text-small mt-10 d-block">61% higher than last month</small>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h6>Events</h6>
                                        <h2>410</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-calendar"></i>
                                    </div>
                                </div>
                                <small class="text-small mt-10 d-block">Total Events</small>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h6>Comments</h6>
                                        <h2>41,410</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-message-square"></i>
                                    </div>
                                </div>
                                <small class="text-small mt-10 d-block">Total Comments</small>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header row">
                        <div class="col col-sm-3">
                            <div class="card-options d-inline-block">
                                <a href="#"><i class="ik ik-inbox"></i></a>
                                <a href="#"><i class="ik ik-plus"></i></a>
                                <a href="#"><i class="ik ik-rotate-cw"></i></a>
                                <div class="dropdown d-inline-block">
                                    <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">More Action</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="card-search with-adv-search dropdown">
                                <form action="">
                                    <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required>
                                    <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                    <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Name" data-column="0">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Position" data-column="1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col2_filter" placeholder="Office" data-column="2">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col3_filter" placeholder="Age" data-column="3">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col4_filter" placeholder="Start date" data-column="4">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter" id="col5_filter" placeholder="Salary" data-column="5">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-theme">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col col-sm-3">
                            <div class="card-options text-right">
                                <span class="mr-5" id="top">1 - 50 of 2,500</span>
                                <a href="#"><i class="ik ik-chevron-left"></i></a>
                                <a href="#"><i class="ik ik-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="advanced_table" class="table">
                            <thead>
                            <tr>
                                <th class="nosort" width="10">
                                    <label class="custom-control custom-checkbox m-0">
                                        <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </th>
                                <th class="nosort">Avatar</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/1.jpg" class="table-user-thumb" alt=""></td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                           
                            
                            
                          
                           
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <footer class="footer">
            <div class="w-100 clearfix">
                <span class="text-center text-sm-left d-md-inline-block">Copyright © 2021 Muhammad Hannan v2.0. All Rights Reserved.</span>
                <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="" class="text-dark" target="_blank">Muhammad Hannan</a></span>
            </div>
        </footer>

    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="{{ URL::asset('backend/admin')}}/plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/screenfull/dist/screenfull.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/moment/moment.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/d3/dist/d3.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/plugins/c3/c3.min.js"></script>
<script src="{{ URL::asset('backend/admin')}}/js/tables.js"></script>
<script src="{{ URL::asset('backend/admin')}}/js/widgets.js"></script>
<script src="{{ URL::asset('backend/admin')}}/js/charts.js"></script>
<script src="{{ URL::asset('backend/admin')}}/dist/js/theme.min.js"></script>

</body>
</html>
