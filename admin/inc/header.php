<?php
require_once('../system/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Sep - Admin &amp; Sep21th</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets\css\vendor.min.css">
  <link rel="stylesheet" href="assets\vendor\icon-set\style.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets\css\theme.min.css?v=1.0">
</head>

<body class="   footer-offset">

  <script src="assets\vendor\hs-navbar-vertical-aside\hs-navbar-vertical-aside-mini-cache.js"></script>


  <!-- ONLY DEV -->



  <!-- JS Preview mode only -->
  <div id="headerMain" class="d-none">
    <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
      <div class="navbar-nav-wrap">
        <div class="navbar-brand-wrapper">
          <!-- Logo -->
          <a class="navbar-brand" href="index.php" aria-label="Front">
            <img class="navbar-brand-logo" src="assets\svg\logos\logo.svg" alt="Logo">
            <img class="navbar-brand-logo-mini" src="assets\svg\logos\logo-short.svg" alt="Logo">
          </a>
          <!-- End Logo -->
        </div>

        <div class="navbar-nav-wrap-content-left">
          <!-- Navbar Vertical Toggle -->
          <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
            <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"></i>
            <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-toggle="tooltip" data-placement="right" title="Expand"></i>
          </button>
          <!-- End Navbar Vertical Toggle -->

          <!-- Search Form -->
          <div class="d-none d-md-block">
            <form class="position-relative">
              <!-- Input Group -->
              <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-search"></i>
                  </div>
                </div>
                <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                     "clearIcon": "#clearSearchResultsIcon",
                     "dropMenuElement": "#searchDropdownMenu",
                     "dropMenuOffset": 20,
                     "toggleIconOnFocus": true,
                     "activeClass": "focus"
                   }'>
                <a class="input-group-append" href="javascript:;">
                  <span class="input-group-text">
                    <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
                  </span>
                </a>
              </div>
              <!-- End Input Group -->

              <!-- Card Search Content -->
              <div id="searchDropdownMenu" class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                <!-- Body -->
                <div class="card-body-height py-3">
                  <small class="dropdown-header mb-n2">Recent searches</small>

                  <div class="dropdown-item bg-transparent text-wrap my-2">
                    <span class="h4 mr-1">
                      <a class="btn btn-xs btn-soft-dark btn-pill" href="index.php">
                        Gulp <i class="tio-search ml-1"></i>
                      </a>
                    </span>
                    <span class="h4">
                      <a class="btn btn-xs btn-soft-dark btn-pill" href="index.php">
                        Notification panel <i class="tio-search ml-1"></i>
                      </a>
                    </span>
                  </div>

                  <div class="dropdown-divider my-3"></div>

                  <small class="dropdown-header mb-n2">Tutorials</small>

                  <a class="dropdown-item my-2" href="index.php">
                    <div class="media align-items-center">
                      <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                        <i class="tio-tune"></i>
                      </span>

                      <div class="media-body text-truncate">
                        <span>How to set up Gulp?</span>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item my-2" href="index.php">
                    <div class="media align-items-center">
                      <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                        <i class="tio-paint-bucket"></i>
                      </span>

                      <div class="media-body text-truncate">
                        <span>How to change theme color?</span>
                      </div>
                    </div>
                  </a>

                  <div class="dropdown-divider my-3"></div>

                  <small class="dropdown-header mb-n2">Members</small>

                  <a class="dropdown-item my-2" href="index.php">
                    <div class="media align-items-center">
                      <img class="avatar avatar-xs avatar-circle mr-2" src="assets\img\160x160\img10.jpg" alt="Image Description">
                      <div class="media-body text-truncate">
                        <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item my-2" href="index.php">
                    <div class="media align-items-center">
                      <img class="avatar avatar-xs avatar-circle mr-2" src="assets\img\160x160\img3.jpg" alt="Image Description">
                      <div class="media-body text-truncate">
                        <span>David Harrison</span>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item my-2" href="index.php">
                    <div class="media align-items-center">
                      <div class="avatar avatar-xs avatar-soft-info avatar-circle mr-2">
                        <span class="avatar-initials">A</span>
                      </div>
                      <div class="media-body text-truncate">
                        <span>Anne Richard</span>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <a class="card-footer text-center" href="index.php">
                  See all results
                  <i class="tio-chevron-right"></i>
                </a>
                <!-- End Footer -->
              </div>
              <!-- End Card Search Content -->
            </form>
          </div>
          <!-- End Search Form -->
        </div>

        <!-- Secondary Content -->
        <div class="navbar-nav-wrap-content-right">
          <!-- Navbar -->
          <ul class="navbar-nav align-items-center flex-row">
            <li class="nav-item d-md-none">
              <!-- Search Trigger -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#searchDropdown",
                 "type": "css-animation",
                 "animationIn": "fadeIn",
                 "hasOverlay": "rgba(46, 52, 81, 0.1)",
                 "closeBreakpoint": "md"
               }'>
                  <i class="tio-search"></i>
                </a>
              </div>
              <!-- End Search Trigger -->
            </li>

            <li class="nav-item d-none d-sm-inline-block">
              <!-- Notification -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#notificationDropdown",
                 "type": "css-animation"
               }'>
                  <i class="tio-notifications-on-outlined"></i>
                  <span class="btn-status btn-sm-status btn-status-danger"></span>
                </a>

                <div id="notificationDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">


                  <!-- Nav -->
                  <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                    </li>
                  </ul>
                  <!-- End Nav -->

                  <!-- Body -->
                  <div class="card-body-height">
                    <!-- Tab Content -->
                    <div class="tab-content" id="notificationTabContent">
                      <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                        <ul class="list-group list-group-flush navbar-card-list-group">
                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked="">
                                    <label class="custom-control-label" for="notificationCheck1"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="assets\img\160x160\img3.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Brian Warner</span>
                                <p class="card-text font-size-sm">changed an issue from "In Progress" to <span class="badge badge-success">Review</span></p>
                              </div>
                              <small class="col-auto text-muted text-cap">2hr</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked="">
                                    <label class="custom-control-label" for="notificationCheck2"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">K</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Klara Hampton</span>
                                <p class="card-text font-size-sm">mentioned you in a comment</p>
                                <blockquote class="blockquote blockquote-sm">
                                  Nice work, love! You really nailed it. Keep it up!
                                </blockquote>
                              </div>
                              <small class="col-auto text-muted text-cap">10hr</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked="">
                                    <label class="custom-control-label" for="notificationCheck4"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="assets\img\160x160\img10.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Ruby Walter</span>
                                <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                              </div>
                              <small class="col-auto text-muted text-cap">3dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck3">
                                    <label class="custom-control-label" for="notificationCheck3"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="assets\svg\brands\google.svg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">from Google</span>
                                <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                              </div>
                              <small class="col-auto text-muted text-cap">17dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck5">
                                    <label class="custom-control-label" for="notificationCheck5"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="assets\img\160x160\img7.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Sara Villar</span>
                                <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-7 task</p>
                              </div>
                              <small class="col-auto text-muted text-cap">2mn</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->
                        </ul>
                      </div>

                      <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                        <ul class="list-group list-group-flush navbar-card-list-group">
                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck7">
                                    <label class="custom-control-label" for="notificationCheck7"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">A</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Anne Richard</span>
                                <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                              </div>
                              <small class="col-auto text-muted text-cap">1dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck6">
                                    <label class="custom-control-label" for="notificationCheck6"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="assets\img\160x160\img5.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Finch Hoot</span>
                                <p class="card-text font-size-sm">left Slack group HS projects</p>
                              </div>
                              <small class="col-auto text-muted text-cap">3dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck8">
                                    <label class="custom-control-label" for="notificationCheck8"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-dark avatar-circle">
                                    <span class="avatar-initials">HS</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Htmlstream</span>
                                <p class="card-text font-size-sm">you earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>
                              </div>
                              <small class="col-auto text-muted text-cap">6dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck9">
                                    <label class="custom-control-label" for="notificationCheck9"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="assets\img\160x160\img8.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Linda Bates</span>
                                <p class="card-text font-size-sm">Accepted your connection</p>
                              </div>
                              <small class="col-auto text-muted text-cap">17dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck10">
                                    <label class="custom-control-label" for="notificationCheck10"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">L</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Lewis Clarke</span>
                                <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-134 task</p>
                              </div>
                              <small class="col-auto text-muted text-cap">2mn</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->
                        </ul>
                      </div>
                    </div>
                    <!-- End Tab Content -->
                  </div>
                  <!-- End Body -->

                  <!-- Card Footer -->
                  <a class="card-footer text-center" href="#">
                    View all notifications
                    <i class="tio-chevron-right"></i>
                  </a>
                  <!-- End Card Footer -->
                </div>
              </div>
              <!-- End Notification -->
            </li>



            <li class="nav-item">
              <!-- Account -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                 "target": "#accountNavbarDropdown",
                 "type": "css-animation"
               }'>
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="assets\img\160x160\img6.jpg" alt="Image Description">
                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                  </div>
                </a>

                <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                  <div class="dropdown-item-text">
                    <div class="media align-items-center">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="assets\img\160x160\img6.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="card-title h5">Mark Williams</span>
                        <span class="card-text">mark@example.com</span>
                      </div>
                    </div>
                  </div>

                  <div class="dropdown-divider"></div>



                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                  </a>

                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Settings">Settings</span>
                  </a>
                  <div class="dropdown-divider"></div>



                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Manage team">Manage team</span>
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                  </a>
                </div>
              </div>
              <!-- End Account -->
            </li>
          </ul>
          <!-- End Navbar -->
        </div>
        <!-- End Secondary Content -->
      </div>
    </header>
  </div>
  <div id="headerFluid" class="d-none">
    <header id="header" class="navbar navbar-expand-xl navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered  ">
      <div class="js-mega-menu navbar-nav-wrap">
        <div class="navbar-brand-wrapper">
          <!-- Logo -->


          <a class="navbar-brand" href="index.php" aria-label="Front">
            <img class="navbar-brand-logo" src="assets\svg\logos\logo.svg" alt="Logo">
          </a>

          <!-- End Logo -->
        </div>





      </div>
    </header>
  </div>
  <div id="headerDouble" class="d-none">
    <header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0">
      <div class="navbar-dark w-100">
        <div class="container-fluid">
          <div class="navbar-nav-wrap">
            <div class="navbar-brand-wrapper">
              <!-- Logo -->
              <a class="navbar-brand" href="index.php" aria-label="Front">
                <img class="navbar-brand-logo" src="assets\svg\logos\logo-white.svg" alt="Logo">
              </a>
              <!-- End Logo -->
            </div>

            <div class="navbar-nav-wrap-content-left">
              <!-- Search Form -->
              <div class="d-none d-lg-block">
                <form class="position-relative">
                  <!-- Input Group -->
                  <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                         "clearIcon": "#clearSearchResultsIcon",
                         "dropMenuElement": "#searchDropdownMenu",
                         "dropMenuOffset": 20,
                         "toggleIconOnFocus": true,
                         "activeClass": "focus"
                       }'>
                    <a class="input-group-append" href="javascript:;">
                      <span class="input-group-text">
                        <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
                      </span>
                    </a>
                  </div>
                  <!-- End Input Group -->

                  <!-- Card Search Content -->
                  <div id="searchDropdownMenu" class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                    <!-- Body -->
                    <div class="card-body-height py-3">
                      <small class="dropdown-header mb-n2">Recent searches</small>

                      <div class="dropdown-item bg-transparent text-wrap my-2">
                        <span class="h4 mr-1">
                          <a class="btn btn-xs btn-soft-dark btn-pill" href="index.php">
                            Gulp <i class="tio-search ml-1"></i>
                          </a>
                        </span>
                        <span class="h4">
                          <a class="btn btn-xs btn-soft-dark btn-pill" href="index.php">
                            Notification panel <i class="tio-search ml-1"></i>
                          </a>
                        </span>
                      </div>

                      <div class="dropdown-divider my-3"></div>

                      <small class="dropdown-header mb-n2">Tutorials</small>

                      <a class="dropdown-item my-2" href="index.php">
                        <div class="media align-items-center">
                          <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                            <i class="tio-tune"></i>
                          </span>

                          <div class="media-body text-truncate">
                            <span>How to set up Gulp?</span>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item my-2" href="index.php">
                        <div class="media align-items-center">
                          <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                            <i class="tio-paint-bucket"></i>
                          </span>

                          <div class="media-body text-truncate">
                            <span>How to change theme color?</span>
                          </div>
                        </div>
                      </a>

                      <div class="dropdown-divider my-3"></div>

                      <small class="dropdown-header mb-n2">Members</small>

                      <a class="dropdown-item my-2" href="index.php">
                        <div class="media align-items-center">
                          <img class="avatar avatar-xs avatar-circle mr-2" src="assets\img\160x160\img10.jpg" alt="Image Description">
                          <div class="media-body text-truncate">
                            <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item my-2" href="index.php">
                        <div class="media align-items-center">
                          <img class="avatar avatar-xs avatar-circle mr-2" src="assets\img\160x160\img3.jpg" alt="Image Description">
                          <div class="media-body text-truncate">
                            <span>David Harrison</span>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item my-2" href="index.php">
                        <div class="media align-items-center">
                          <div class="avatar avatar-xs avatar-soft-info avatar-circle mr-2">
                            <span class="avatar-initials">A</span>
                          </div>
                          <div class="media-body text-truncate">
                            <span>Anne Richard</span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <a class="card-footer text-center" href="index.php">
                      See all results
                      <i class="tio-chevron-right"></i>
                    </a>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card Search Content -->
                </form>
              </div>
              <!-- End Search Form -->
            </div>

          </div>
        </div>
      </div>

    </header>
  </div>
  <div id="sidebarMain" class="d-none">
    <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
      <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
          <div class="navbar-brand-wrapper justify-content-between">
            <!-- Logo -->


            <a class="navbar-brand" href="index.php" aria-label="Front">
              <img class="navbar-brand-logo" src="assets\svg\logos\logo.svg" alt="Logo">
              <img class="navbar-brand-logo-mini" src="assets\svg\logos\logo-short.svg" alt="Logo">
            </a>

            <!-- End Logo -->

            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
              <i class="tio-clear tio-lg"></i>
            </button>
            <!-- End Navbar Vertical Toggle -->
          </div>

          <!-- Content -->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav navbar-nav-lg nav-tabs">
              <!-- Dashboards -->
              <li class="navbar-vertical-aside-has-menu show">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle active" href="index.php" title="Dashboards">
                  <i class="tio-home-vs-1-outlined nav-icon"></i>
                  <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
                </a>
              </li>
              <!-- End Dashboards -->


              <!-- Pages -->
              <li class="navbar-vertical-aside-has-menu ">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Pages">
                  <i class="tio-pages-outlined nav-icon"></i>
                  <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Pages</span>
                </a>

                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Users">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Users</span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="users.php" title="Overview">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Overview</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="users-add-user.php" title="Add User">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Add User <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="User Profile">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">User Profile <span class="badge badge-primary badge-pill ml-1">2</span></span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="user-profile.php" title="Profile">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Profile</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="user-profile-my-profile.php" title="My Profile">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">My Profile</span>
                        </a>
                      </li>
                    </ul>
                  </li>


                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="E-commerce">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">E-commerce</span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce.php" title="Overview">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Overview</span>
                        </a>
                      </li>


                      <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Orders">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Orders</span>
                        </a>

                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                          <li class="nav-item">
                            <a class="nav-link " href="ecommerce-orders.php" title="Orders">
                              <span class="tio-circle nav-indicator-icon"></span>
                              <span class="text-truncate">Orders</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="ecommerce-order-details.php" title="Order Details">
                              <span class="tio-circle nav-indicator-icon"></span>
                              <span class="text-truncate">Order Details</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Customers">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Customers</span>
                        </a>

                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                          <li class="nav-item">
                            <a class="nav-link " href="ecommerce-customers.php" title="Customers">
                              <span class="tio-circle nav-indicator-icon"></span>
                              <span class="text-truncate">Customers</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="ecommerce-add-customers.php" title="Add Customers">
                              <span class="tio-circle nav-indicator-icon"></span>
                              <span class="text-truncate">Add Customers</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-manage-reviews.php" title="Manage Reviews">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Manage Reviews</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="E-commerce">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Category</span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="category-page.php?page=list" title="Overview">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Overview</span>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link " href="category-page.php?page=add&category-add.php" title="Manage Reviews">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Add Category</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="E-commerce">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Product</span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="product-page.php?page=list" title="Overview">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Overview</span>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link " href="product-page.php?page=add" title="Manage Reviews">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Add Product</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Pages -->




              <li class="nav-item ">
                <a class="js-nav-tooltip-link nav-link " href="welcome-page.php" title="Welcome page" data-placement="left">
                  <i class="tio-visible-outlined nav-icon"></i>
                  <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Welcome Page</span>
                </a>
              </li>



            </ul>
          </div>
          <!-- End Content -->


        </div>
      </div>
    </aside>
  </div>
  <div id="sidebarCompact" class="d-none">
    <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">

    </aside>
  </div>

  <script src="assets\js\demo.js"></script>

  <!-- END ONLY DEV -->

  <!-- Search Form -->
  <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
    <form class="input-group input-group-merge input-group-borderless">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="tio-search"></i>
        </div>
      </div>

      <input class="form-control rounded-0" type="search" placeholder="Search in front" aria-label="Search in front">

      <div class="input-group-append">
        <div class="input-group-text">
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                   "target": "#searchDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeIn",
                   "hasOverlay": "rgba(46, 52, 81, 0.1)",
                   "closeBreakpoint": "md"
                 }'>
              <i class="tio-clear tio-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </form>
  </div>