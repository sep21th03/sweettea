﻿<?php
require '../admin/inc/header.php'
?>

<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <div class="row justify-content-lg-center">
      <div class="col-lg-10">
        <!-- Profile Cover -->
        <div class="profile-cover">
          <div class="profile-cover-img-wrapper">
            <img id="profileCoverImg" class="profile-cover-img" src="assets\img\1920x400\img2.jpg" alt="Image Description">

            <!-- Custom File Cover -->
            <div class="profile-cover-content profile-cover-btn">
              <div class="custom-file-btn">
                <input type="file" class="js-file-attach custom-file-btn-input" id="profileCoverUplaoder" data-hs-file-attach-options='{
                              "textTarget": "#profileCoverImg",
                              "mode": "image",
                              "targetAttr": "src",
                              "allowTypes": [".png", ".jpeg", ".jpg"]
                           }'>
                <label class="custom-file-btn-label btn btn-sm btn-white" for="profileCoverUplaoder">
                  <i class="tio-add-photo"></i>
                  <span class="d-none d-sm-inline-block ml-1">Update your header</span>
                </label>
              </div>
            </div>
            <!-- End Custom File Cover -->
          </div>
        </div>
        <!-- End Profile Cover -->

        <!-- Profile Header -->
        <div class="text-center mb-5">
          <!-- Avatar -->
          <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
            <img id="avatarImg" class="avatar-img" src="assets\img\160x160\img6.jpg" alt="Image Description">

            <input type="file" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                          "textTarget": "#avatarImg",
                          "mode": "image",
                          "targetAttr": "src",
                          "allowTypes": [".png", ".jpeg", ".jpg"]
                       }'>

            <span class="avatar-uploader-trigger">
              <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
            </span>
          </label>
          <!-- End Avatar -->

          <h1 class="page-header-title">Mark Williams <i class="tio-verified tio-lg text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h1>

          <!-- List -->
          <ul class="list-inline list-inline-m-1">
            <li class="list-inline-item">
              <i class="tio-city mr-1"></i>
              <span>Pixeel Ltd.</span>
            </li>

            <li class="list-inline-item">
              <i class="tio-poi-outlined mr-1"></i>
              <a href="#">London,</a>
              <a href="#">UK</a>
            </li>

            <li class="list-inline-item">
              <i class="tio-date-range mr-1"></i>
              <span>Joined March 2013</span>
            </li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Profile Header -->

        <!-- Nav -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5" data-hs-nav-scroller-options='{
                   "type": "horizontal",
                   "delay": 20
                 }'>

          <span class="hs-nav-scroller-arrow-backward" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="javascript:;">
              <i class="tio-chevron-left"></i>
            </a>
          </span>

          <span class="hs-nav-scroller-arrow-forward" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="javascript:;">
              <i class="tio-chevron-right"></i>
            </a>
          </span>

          <ul class="nav nav-tabs align-items-center">
            <li class="nav-item">
              <a class="nav-link active disabled" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Connections</a>
            </li>

            <li class="nav-item ml-auto">
              <a class="btn btn-sm btn-white mr-2" href="account-settings.php">
                <i class="tio-edit mr-1"></i> Edit profile
              </a>

              <a class="btn btn-icon btn-sm btn-white mr-2" href="#">
                <i class="tio-format-points mr-1"></i>
              </a>

              <!-- Unfold -->
              <div class="hs-unfold hs-nav-scroller-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#profileDropdown",
                         "type": "css-animation"
                       }'>
                  <i class="tio-more-vertical"></i>
                </a>

                <div id="profileDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="tio-share dropdown-item-icon"></i> Share profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="tio-blocked dropdown-item-icon"></i> Block page and profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                  </a>

                  <div class="dropdown-divider"></div>

                  <span class="dropdown-header">Feedback</span>

                  <a class="dropdown-item" href="#">
                    <i class="tio-report-outlined dropdown-item-icon"></i> Report
                  </a>
                </div>
              </div>
              <!-- End Unfold -->
            </li>
          </ul>
        </div>
        <!-- End Nav -->

        <div class="row">
          <div class="col-lg-4">
            <!-- Card -->
            <div class="card card-body mb-3 mb-lg-5">
              <h5>Complete your profile</h5>

              <!-- Progress -->
              <div class="d-flex justify-content-between align-items-center">
                <div class="progress flex-grow-1">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="ml-4">15%</span>
              </div>
              <!-- End Progress -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h2 class="card-header-title h5">Profile</h2>

                <a class="btn btn-sm btn-white" href="account-settings.php">Edit</a>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <ul class="list-unstyled list-unstyled-py-3 text-dark mb-3">
                  <li class="py-0">
                    <small class="card-subtitle">About</small>
                  </li>

                  <li>
                    <i class="tio-user-outlined nav-icon"></i>
                    Mark Williams
                  </li>
                  <li>
                    <i class="tio-briefcase-outlined nav-icon"></i>
                    No department title
                  </li>
                  <li>
                    <i class="tio-city nav-icon"></i>
                    Pixeel Ltd.
                  </li>

                  <li class="pt-2 pb-0">
                    <small class="card-subtitle">Contacts</small>
                  </li>

                  <li>
                    <i class="tio-online nav-icon"></i>
                    mark@example.com
                  </li>
                  <li>
                    <i class="tio-android-phone-vs nav-icon"></i>
                    +1 (555) 752-01-10
                  </li>

                  <li class="pt-2 pb-0">
                    <small class="card-subtitle">Teams</small>
                  </li>

                  <li class="font-size-sm text-body">
                    <i class="tio-group-equal nav-icon"></i>
                    You are not a member of any teams
                  </li>
                  <li class="font-size-sm text-body">
                    <i class="tio-briefcase-outlined nav-icon"></i>
                    You are not working on any projects
                  </li>
                </ul>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card card-lg mb-3 mb-lg-5">
              <!-- Body -->
              <div class="card-body text-center">
                <div class="w-50 mx-auto mb-4">
                  <img class="img-fluid" src="assets\svg\illustrations\unlock.svg" alt="Image Description">
                </div>

                <div class="mb-3">
                  <h3>2-step verification</h3>
                  <p>Protect your account now and enable 2-step verification in the settings.</p>
                </div>

                <a class="btn btn-primary" href="account-settings.php#twoStepVerificationSection">Enable Now</a>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-8">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h2 class="card-header-title h5">Activity stream</h2>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#contentActivityStreamDropdown",
                           "type": "css-animation"
                         }'>
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="contentActivityStreamDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share connections
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body card-body-height card-body-centered">
                <img class="avatar avatar-xxl mb-3" src="assets\svg\illustrations\yelling.svg" alt="Image Description">
                <p class="card-text">No data to show</p>
                <a class="btn btn-sm btn-white" href="#">Start your Activity</a>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h2 class="card-header-title h5">Projects</h2>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#projectReportDropdown",
                           "type": "css-animation"
                         }'>
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="projectReportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share connections
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body card-body-height card-body-centered">
                <img class="avatar avatar-xxl mb-3" src="assets\svg\illustrations\yelling.svg" alt="Image Description">
                <p class="card-text">No data to show</p>
                <a class="btn btn-sm btn-white" href="projects.html">Start your Projects</a>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Row -->
  </div>
  <!-- End Content -->

  <!-- Footer -->

  <div class="footer">
    <div class="row justify-content-between align-items-center">
      <div class="col">
        <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
      </div>
      <div class="col-auto">
        <div class="d-flex justify-content-end">
          <!-- List Dot -->
          <ul class="list-inline list-separator">
            <li class="list-inline-item">
              <a class="list-separator-link" href="#">FAQ</a>
            </li>

            <li class="list-inline-item">
              <a class="list-separator-link" href="#">License</a>
            </li>

            <li class="list-inline-item">
              <!-- Keyboard Shortcuts Toggle -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                  <i class="tio-command-key"></i>
                </a>
              </div>
              <!-- End Keyboard Shortcuts Toggle -->
            </li>
          </ul>
          <!-- End List Dot -->
        </div>
      </div>
    </div>
  </div>



  <!-- End Footer -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Keyboard Shortcuts -->
<div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
  <div class="card card-lg sidebar-card">
    <div class="card-header">
      <h4 class="card-header-title">Keyboard shortcuts</h4>

      <!-- Toggle Button -->
      <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
        <i class="tio-clear tio-lg"></i>
      </a>
      <!-- End Toggle Button -->
    </div>

    <!-- Body -->
    <div class="card-body sidebar-body sidebar-scrollbar">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="font-weight-bold">Bold</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
          </div>
        </div>
      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
          </div>
        </div>
      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
          </div>
        </div>
      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Body -->
  </div>
</div>
<!-- End Keyboard Shortcuts -->

<!-- Activity -->
<div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
  <div class="card card-lg sidebar-card">
    <div class="card-header">
      <h4 class="card-header-title">Activity stream</h4>

      <!-- Toggle Button -->
      <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
        <i class="tio-clear tio-lg"></i>
      </a>
      <!-- End Toggle Button -->
    </div>

    <!-- Body -->
    <div class="card-body sidebar-body sidebar-scrollbar">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets\img\160x160\img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <div class="media">
                        <span class="mt-1 mr-2">
                          <img class="avatar avatar-xs" src="assets\svg\brands\excel.svg" alt="Image Description">
                        </span>
                        <div class="media-body text-truncate">
                          <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <small class="d-block text-muted">12kb</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="media">
                        <span class="mt-1 mr-2">
                          <img class="avatar avatar-xs" src="assets\svg\brands\word.svg" alt="Image Description">
                        </span>
                        <div class="media-body text-truncate">
                          <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <small class="d-block text-muted">4kb</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- End List Item -->
              </ul>

              <small class="text-muted text-uppercase">Now</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <small class="text-muted text-uppercase">Today</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets\img\160x160\img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <small class="text-muted text-uppercase">May 12</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

              <small class="text-muted text-uppercase">May 15</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets\img\160x160\img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <small class="text-muted text-uppercase">Apr 29</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets\img\160x160\img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

              <small class="text-muted text-uppercase">Apr 06</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="tio-user"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <small class="text-muted text-uppercase">Feb 10</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
    </div>
    <!-- End Body -->
  </div>
</div>
<!-- End Activity -->

<!-- Welcome Message Modal -->
<div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-close">
        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body p-sm-5">
        <div class="text-center">
          <div class="w-75 w-sm-50 mx-auto mb-4">
            <img class="img-fluid" src="assets\svg\illustrations\graphs.svg" alt="Image Description">
          </div>

          <h4 class="h1">Welcome to Front</h4>

          <p>We're happy to see you in our community.</p>
        </div>
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer d-block text-center py-sm-5">
        <small class="text-cap mb-4">Trusted by the world's best teams</small>

        <div class="w-85 mx-auto">
          <div class="row justify-content-between">
            <div class="col">
              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\gitlab-gray.svg" alt="Image Description">
            </div>
            <div class="col">
              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\fitbit-gray.svg" alt="Image Description">
            </div>
            <div class="col">
              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\flow-xo-gray.svg" alt="Image Description">
            </div>
            <div class="col">
              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\layar-gray.svg" alt="Image Description">
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Welcome Message Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->


<!-- JS Implementing Plugins -->
<script src="assets\js\vendor.min.js"></script>



<!-- JS Front -->
<script src="assets\js\theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function() {
    // ONLY DEV
    // =======================================================

    if (window.localStorage.getItem('hs-builder-popover') === null) {
      $('#builderPopover').popover('show')
        .on('shown.bs.popover', function() {
          $('.popover').last().addClass('popover-dark')
        });

      $(document).on('click', '#closeBuilderPopover', function() {
        window.localStorage.setItem('hs-builder-popover', true);
        $('#builderPopover').popover('dispose');
      });
    } else {
      $('#builderPopover').on('show.bs.popover', function() {
        return false
      });
    }

    // END ONLY DEV
    // =======================================================


    // BUILDER TOGGLE INVOKER
    // =======================================================
    $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
      $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
    });


    // INITIALIZATION OF MEGA MENU
    // =======================================================
    var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
      desktop: {
        position: 'left'
      }
    }).init();



    // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
    // =======================================================
    var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


    // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
    // =======================================================
    $('.js-nav-tooltip-link').tooltip({
      boundary: 'window'
    })

    $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
      if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
        return false;
      }
    });


    // INITIALIZATION OF UNFOLD
    // =======================================================
    $('.js-hs-unfold-invoker').each(function() {
      var unfold = new HSUnfold($(this)).init();
    });


    // INITIALIZATION OF FORM SEARCH
    // =======================================================
    $('.js-form-search').each(function() {
      new HSFormSearch($(this)).init()
    });


    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });


    // INITIALIZATION OF NAV SCROLLER
    // =======================================================
    $('.js-nav-scroller').each(function() {
      new HsNavScroller($(this)).init()
    });
  });
</script>

<!-- IE Support -->

<?php
require './inc/footer.php';
?>