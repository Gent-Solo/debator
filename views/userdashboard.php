<?php 
 include_once("../path.php");
?>
<!DOCTYPE html>
<!-- saved from url=(0097)https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/index.html -->
<html dir="ltr" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Monster Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href=<?php echo FILE_ASSETS_CSS_USER_PATH ?>/chartist.min.css rel="stylesheet">
    <!-- Custom CSS -->
    <link href=<?php echo FILE_ASSETS_CSS_USER_PATH ?>/style.min.css rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
          <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/index.html">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src=<?php echo FILE_ASSETS_IMG_USER_PATH ?>/logo-icon.png alt="homepage" class="dark-logo">
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src=<?php echo FILE_ASSETS_IMG_USER_PATH ?>/logo-text.png alt="homepage" class="dark-logo">
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a class="
                nav-toggler
                waves-effect waves-light
                text-dark
                d-block d-md-none
              " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto mt-md-0">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->

              <li class="nav-item hidden-sm-down">
                <form class="app-search ps-3">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <a class="srh-btn"><i class="mdi mdi-magnify fs-4 lh-sm"></i></a>
                </form>
              </li>
            </ul>

            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/index.html#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src=<?php echo FILE_ASSETS_IMG_USER_PATH ?>/1.jpg alt="user" class="profile-pic me-2">Markarn Doe
                </a>
                <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="in">
              <!-- User Profile-->
              <li class="sidebar-item selected">
                <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/index.html" aria-expanded="false"><i class="me-3 mdi mdi-view-dashboard fs-3" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/pages-profile.html" aria-expanded="false">
                  <i class="me-3 mdi mdi-account-network fs-3" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/table-basic.html" aria-expanded="false"><i class="me-3 mdi mdi-border-all fs-3" aria-hidden="true"></i><span class="hide-menu">Table</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/icon-material.html" aria-expanded="false"><i class="me-3 mdi mdi-face fs-3" aria-hidden="true"></i><span class="hide-menu">Icon</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/map-google.html" aria-expanded="false"><i class="me-3 mdi mdi-earth fs-3" aria-hidden="true"></i><span class="hide-menu">Google Map</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/pages-blank.html" aria-expanded="false"><i class="me-3 mdi mdi-file fs-3" aria-hidden="true"></i><span class="hide-menu">Blank</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/pages-error-404.html" aria-expanded="false"><i class="me-3 mdi mdi-alert-outline fs-3" aria-hidden="true"></i><span class="hide-menu">Error 404</span></a>
              </li>
              <li class="text-center p-20 upgrade-btn">
                <a href="https://www.wrappixel.com/templates/monsteradmin/" class="btn btn-danger text-white mt-4" target="_blank">Upgrade to Pro</a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="page-title mb-0 p-0">Dashboard</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://demos.wrappixel.com/free-admin-templates/bootstrap/monster-bootstrap-free/html/index.html#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Dashboard
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
              <div class="text-end upgrade-btn">
                <a href="https://www.wrappixel.com/templates/monsteradmin/" class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to Pro</a>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <div class="text-end">
                    <h2 class="font-light mb-0">
                      <i class="mdi mdi-arrow-up fs-2 text-success"></i> $120
                    </h2>
                    <span class="text-muted">Todays Income</span>
                  </div>
                  <span class="text-success">80%</span>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Weekly Sales</h4>
                  <div class="text-end">
                    <h2 class="font-light mb-0">
                      <i class="mdi mdi-arrow-up fs-2 text-info"></i> $5,000
                    </h2>
                    <span class="text-muted">Todays Income</span>
                  </div>
                  <span class="text-info">30%</span>
                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- column -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Revenue Statistics</h4>
                  <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-line-chart" style="padding: 0px; position: relative">
                      <canvas class="flot-base w-100" height="400" width="1245" style="width: 1245px; height: 400px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 24px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 126px; text-align: center;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 226px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 327px; text-align: center;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 428px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 528px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 629px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 730px; text-align: center;">7</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 830px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 931px; text-align: center;">9</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 1030px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 95px; top: 383px; left: 1132px; text-align: center;">11</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 338px; left: 3px; text-align: right;">-1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 261px; left: 0px; text-align: right;">-0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 184px; left: 5px; text-align: right;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 108px; left: 6px; text-align: right;">0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 31px; left: 8px; text-align: right;">1.0</div></div></div>
                    <canvas class="flot-overlay" width="1245" height="400" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1245px; height: 400px;"></canvas><div class="legend"><div style="position: absolute; width: 49.2031px; height: 39px; top: 14px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:14px;right:13px;;font-size:smaller;color:#AFAFAF"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(0,158,251);overflow:hidden"></div></div></td><td class="legendLabel">sin(x)</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(85,206,99);overflow:hidden"></div></div></td><td class="legendLabel">cos(x)</td></tr></tbody></table></div></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
          </div>
          <!-- ============================================================== -->
          <!-- Table -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex">
                    <h4 class="
                        card-title
                        col-md-10
                        mb-md-0 mb-3
                        align-self-center
                      ">
                      Projects of the Month
                    </h4>
                    <div class="col-md-2 ms-auto">
                      <select class="form-select shadow-none col-md-2 ml-auto">
                        <option selected="">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                      </select>
                    </div>
                  </div>
                  <div class="table-responsive mt-5">
                    <table class="table stylish-table no-wrap">
                      <thead>
                        <tr>
                          <th class="border-top-0" colspan="2">Assigned</th>
                          <th class="border-top-0">Name</th>
                          <th class="border-top-0">Budget</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="width: 50px">
                            <span class="round">S</span>
                          </td>
                          <td class="align-middle">
                            <h6>Sunil Joshi</h6>
                            <small class="text-muted">Web Designer</small>
                          </td>
                          <td class="align-middle">Elite Admin</td>
                          <td class="align-middle">$3.9K</td>
                        </tr>
                        <tr class="active">
                          <td>
                            <span class="round"><img src=<?php echo FILE_ASSETS_IMG_USER_PATH ?>/2.jpg alt="user" width="50"></span>
                          </td>
                          <td class="align-middle">
                            <h6>Andrew</h6>
                            <small class="text-muted">Project Manager</small>
                          </td>
                          <td class="align-middle">Real Homes</td>
                          <td class="align-middle">$23.9K</td>
                        </tr>
                        <tr>
                          <td><span class="round round-success">B</span></td>
                          <td class="align-middle">
                            <h6>Bhavesh patel</h6>
                            <small class="text-muted">Developer</small>
                          </td>
                          <td class="align-middle">MedicalPro Theme</td>
                          <td class="align-middle">$12.9K</td>
                        </tr>
                        <tr>
                          <td><span class="round round-primary">N</span></td>
                          <td class="align-middle">
                            <h6>Nirav Joshi</h6>
                            <small class="text-muted">Frontend Eng</small>
                          </td>
                          <td class="align-middle">Elite Admin</td>
                          <td class="align-middle">$10.9K</td>
                        </tr>
                        <tr>
                          <td><span class="round round-warning">M</span></td>
                          <td class="align-middle">
                            <h6>Micheal Doe</h6>
                            <small class="text-muted">Content Writer</small>
                          </td>
                          <td class="align-middle">Helping Hands</td>
                          <td class="align-middle">$12.9K</td>
                        </tr>
                        <tr>
                          <td><span class="round round-danger">N</span></td>
                          <td class="align-middle">
                            <h6>Johnathan</h6>
                            <small class="text-muted">Graphic</small>
                          </td>
                          <td class="align-middle">Digital Agency</td>
                          <td class="align-middle">$2.6K</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Table -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Recent blogss -->
          <!-- ============================================================== -->
          <div class="row justify-content-center">
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img class="card-img-top img-responsive" src=<?php echo FILE_ASSETS_IMG_USER_PATH ?>/img1.jpg alt="Card">
                <div class="card-body">
                  <ul class="list-inline d-flex align-items-center">
                    <li class="ps-0">20 May 2021</li>
                    <li class="ms-auto">
                      <a href="javascript:void(0)" class="link">3 Comment</a>
                    </li>
                  </ul>
                  <h3 class="font-normal">
                    Featured Hydroflora Pots Garden &amp; Outdoors
                  </h3>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img class="card-img-top img-responsive" src=<?php echo FILE_ASSETS_IMG_USER_PATH ?>/img2.jpg alt="Card">
                <div class="card-body">
                  <ul class="list-inline d-flex align-items-center">
                    <li class="ps-0">20 May 2021</li>
                    <li class="ms-auto">
                      <a href="javascript:void(0)" class="link">3 Comment</a>
                    </li>
                  </ul>
                  <h3 class="font-normal">
                    Featured Hydroflora Pots Garden &amp; Outdoors
                  </h3>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img class="card-img-top img-responsive" src=<?php echo FILE_ASSETS_IMG_USER_PATH ?>/img4.jpg alt="Card">
                <div class="card-body">
                  <ul class="list-inline d-flex align-items-center">
                    <li class="ps-0">20 May 2021</li>
                    <li class="ms-auto">
                      <a href="javascript:void(0)" class="link">3 Comment</a>
                    </li>
                  </ul>
                  <h3 class="font-normal">
                    Featured Hydroflora Pots Garden &amp; Outdoors
                  </h3>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- ============================================================== -->
          <!-- Recent blogss -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          © 2021 Monster Admin by
          <a href="https://www.wrappixel.com/">wrappixel.com</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/jquery.min.js></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/bootstrap.bundle.min.js></script>
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/app-style-switcher.js></script>
    <!--Wave Effects -->
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/waves.js></script>
    <!--Menu sidebar -->
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/sidebarmenu.js></script>
    <!--Custom JavaScript -->
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/custom.js></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/jquery.flot.js></script>
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/jquery.flot.tooltip.min.js></script>
    <script src=<?php echo FILE_ASSETS_JS_USER_PATH ?>/dashboard1.js></script>
  

<div class="flotTip" style="position: absolute; background: rgb(255, 255, 255); z-index: 1040; padding: 0.4em 0.6em; border-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap; left: 948px; top: 608px; display: none;"></div></body></html>