
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
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

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
                            <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Levels</span></a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                                    <div class="submenu-content">
                                        <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
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
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/2.jpg" class="table-user-thumb" alt=""></td>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/4.jpg" class="table-user-thumb" alt=""></td>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/5.jpg" class="table-user-thumb" alt=""></td>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/1.jpg" class="table-user-thumb" alt=""></td>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/2.jpg" class="table-user-thumb" alt=""></td>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </td>
                                <td><img src="{{ URL::asset('backend/admin')}}/img/users/4.jpg" class="table-user-thumb" alt=""></td>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="chat-panel" hidden>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
                    <span class="user-name">John Doe</span>
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="card-body">
                    <div class="widget-chat-activity flex-1">
                        <div class="messages">
                            <div class="message media reply">
                                <figure class="user--online">
                                    <a href="#">
                                        <img src="{{ URL::asset('backend/admin')}}/img/users/3.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Epic Cheeseburgers come in all kind of styles.</p>
                                </div>
                            </div>
                            <div class="message media">
                                <figure class="user--online">
                                    <a href="#">
                                        <img src="{{ URL::asset('backend/admin')}}/img/users/1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers make your knees weak.</p>
                                </div>
                            </div>
                            <div class="message media reply">
                                <figure class="user--offline">
                                    <a href="#">
                                        <img src="{{ URL::asset('backend/admin')}}/img/users/5.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers will never let you down.</p>
                                    <p>They'll also never run around or desert you.</p>
                                </div>
                            </div>
                            <div class="message media">
                                <figure class="user--online">
                                    <a href="#">
                                        <img src="{{ URL::asset('backend/admin')}}/img/users/1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>A great cheeseburger is a gastronomical event.</p>
                                </div>
                            </div>
                            <div class="message media reply">
                                <figure class="user--busy">
                                    <a href="#">
                                        <img src="{{ URL::asset('backend/admin')}}/img/users/5.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                </div>
                            </div>
                            <div class="message media">
                                <figure class="user--online">
                                    <a href="#">
                                        <img src="{{ URL::asset('backend/admin')}}/img/users/1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>If you are a vegan, we are sorry for you loss.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="javascript:void(0)" class="card-footer" method="post">
                    <div class="d-flex justify-content-end">
                        <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                        <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
                    </div>
                </form>
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




<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="quick-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <div class="input-wrap">
                                <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                <i class="ik ik-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="container">
                    <div class="apps-wrap">
                        <div class="app-item">
                            <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                        </div>
                        <div class="app-item dropdown">
                            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
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
