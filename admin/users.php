<?php
require '../admin/inc/header.php';
require '../classes/user.php';

$user = new User();

?>

<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-end">
        <div class="col-sm mb-2 mb-sm-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
              <li class="breadcrumb-item active" aria-current="page">Overview</li>
            </ol>
          </nav>

          <h1 class="page-header-title">Users</h1>
        </div>

        <div class="col-sm-auto">
          <a class="btn btn-primary" href="users-add-user.html">
            <i class="tio-user-add mr-1"></i> Add user
          </a>
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <!-- Stats -->
    <div class="row gx-2 gx-lg-3">
      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <!-- Card -->
        <div class="card h-100">
          <div class="card-body">
            <h6 class="card-subtitle mb-2">Total users</h6>

            <div class="row align-items-center gx-2">
              <div class="col">
                <span class="js-counter display-4 text-dark">24</span>
                <span class="text-body font-size-sm ml-1">from 22</span>
              </div>

              <div class="col-auto">
                <span class="badge badge-soft-success p-1">
                  <i class="tio-trending-up"></i> 5.0%
                </span>
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>

      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <!-- Card -->
        <div class="card h-100">
          <div class="card-body">
            <h6 class="card-subtitle mb-2">Active members</h6>

            <div class="row align-items-center gx-2">
              <div class="col">
                <span class="js-counter display-4 text-dark">12</span>
                <span class="text-body font-size-sm ml-1">from 11</span>
              </div>

              <div class="col-auto">
                <span class="badge badge-soft-success p-1">
                  <i class="tio-trending-up"></i> 1.2%
                </span>
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>

      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <!-- Card -->
        <div class="card h-100">
          <div class="card-body">
            <h6 class="card-subtitle mb-2">New/returning</h6>

            <div class="row align-items-center gx-2">
              <div class="col">
                <span class="js-counter display-4 text-dark">56</span>
                <span class="display-4 text-dark">%</span>
                <span class="text-body font-size-sm ml-1">from 48.7</span>
              </div>

              <div class="col-auto">
                <span class="badge badge-soft-danger p-1">
                  <i class="tio-trending-down"></i> 2.8%
                </span>
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>

      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <!-- Card -->
        <div class="card h-100">
          <div class="card-body">
            <h6 class="card-subtitle mb-2">Active members</h6>

            <div class="row align-items-center gx-2">
              <div class="col">
                <span class="js-counter display-4 text-dark">28.6</span>
                <span class="display-4 text-dark">%</span>
                <span class="text-body font-size-sm ml-1">from 28.6%</span>
              </div>

              <div class="col-auto">
                <span class="badge badge-soft-secondary p-1">0.0%</span>
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Stats -->

    <!-- Card -->
    <div class="card">
      <!-- Header -->
      <div class="card-header">
        <div class="row justify-content-between align-items-center flex-grow-1">
          <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-search"></i>
                  </div>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="col-sm-6">
            <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
              <!-- Datatable Info -->
              <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
                <div class="d-flex align-items-center">
                  <span class="font-size-sm mr-3">
                    <span id="datatableCounter">0</span>
                    Selected
                  </span>
                  <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                    <i class="tio-delete-outlined"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Datatable Info -->

              <!-- Unfold -->
              <div class="hs-unfold mr-2">
                <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersExportDropdown",
                         "type": "css-animation"
                       }'>
                  <i class="tio-download-to mr-1"></i> Export
                </a>

                <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                  <span class="dropdown-header">Options</span>
                  <a id="export-copy" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="assets\svg\illustrations\copy.svg" alt="Image Description">
                    Copy
                  </a>
                  <a id="export-print" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="assets\svg\illustrations\print.svg" alt="Image Description">
                    Print
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Download options</span>
                  <a id="export-excel" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="assets\svg\brands\excel.svg" alt="Image Description">
                    Excel
                  </a>
                  <a id="export-csv" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="assets\svg\components\placeholder-csv-format.svg" alt="Image Description">
                    .CSV
                  </a>
                  <a id="export-pdf" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="assets\svg\brands\pdf.svg" alt="Image Description">
                    PDF
                  </a>
                </div>
              </div>
              <!-- End Unfold -->

              <!-- End Unfold -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Header -->

      <!-- Table -->
      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 7],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 15,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
          <thead class="thead-light">
            <tr>
              <th class="table-column-pr-0">
                <div class="custom-control custom-checkbox">
                  <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                  <label class="custom-control-label" for="datatableCheckAll"></label>
                </div>
              </th>
              <th class="table-column-pl-0">Name</th>
              <th>Username</th>
              <th>Địa chỉ</th>
              <th>SĐT</th>
              <th>Tiền</th>
              <th>Giới tính</th>
              <th>Role</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <?php
            $show_users = $user->show_users();
            if ($show_users) {
              $i = 0;
              while ($result = $show_users->fetch_assoc()) {
                $i++;
                $password = $result['password'];
                $serpwd = md5($password);
                $role = $result['role'];
                if ($role == 1) {
                  $role = "Admin";
                } else if ($role == 33) {
                  $role = "Staff";
                } else {
                  $role = "User";
                }
            ?>
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                      <label class="custom-control-label" for="usersDataCheck1"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="<?php echo $result['avt'] ?>" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0"><?php echo $result['hoten'] ?><i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body"><?php echo $result['email'] ?></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0"><?php echo $result['username'] ?></span>
                    <span class="d-block font-size-sm"><?php echo $serpwd ?></span>
                  </td>
                  <td><?php echo $result['diachi'] ?><span class="text-hide"></span></td>
                  <td><?php echo $result['sdt'] ?> </td>
                  <td><?php echo $result['vnd'] ?></td>
                  <td><?php echo $result['gt'] ?></td>
                  <td><?php echo $role ?></td>
                  <td>
                    <div id="editUserPopover" data-toggle="popover-dark" data-placement="left" title="<div class='d-flex align-items-center'>Edit user <a href='#!' class='close close-light ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>" data-content="Check out this Edit user modal example." data-html="true">
                      <button type="button" class="btn btn-sm btn-white" onclick="openModal('modaledituser_<?php echo $result['userid'] ?>')">
                        <i class="tio-edit"></i>Edit
                      </button>
                    </div>
                  </td>
                </tr>

            <?php
              }
            }
            ?>
          </tbody>



        </table>
      </div>
      <!-- End Table -->

      <!-- Footer -->
      <div class="card-footer">
        <!-- Pagination -->
        <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
          <div class="col-sm mb-2 mb-sm-0">
            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
              <span class="mr-2">Showing:</span>

              <!-- Select -->
              <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                <option value="10">10</option>
                <option value="15" selected="">15</option>
                <option value="20">20</option>
              </select>
              <!-- End Select -->

              <span class="text-secondary mr-2">of</span>

              <!-- Pagination Quantity -->
              <span id="datatableWithPaginationInfoTotalQty"></span>
            </div>
          </div>

          <div class="col-sm-auto">
            <div class="d-flex justify-content-center justify-content-sm-end">
              <!-- Pagination -->
              <nav id="datatablePagination" aria-label="Activity pagination"></nav>
            </div>
          </div>
        </div>
        <!-- End Pagination -->
      </div>
      <!-- End Footer -->
    </div>
    <!-- End Card -->
  </div>
  <!-- End Content -->

</main>
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
<?php
$show_users = $user->show_users();
if ($show_users) {
  $i = 0;
  while ($result = $show_users->fetch_assoc()) {
    $i++;
    $password = $result['password'];
    $serpwd = md5($password);
    $role = $result['role'];
    if ($role == 1) {
      $role = "Admin";
    } else if ($role == 33) {
      $role = "Staff";
    } else {
      $role = "User";
    }
?>
    <!-- Edit user Modal -->
    <div class="modal fade" id="modaledituser_<?=$result['userid'];?>" tabindex="-1" role="dialog" aria-labelledby="editUserModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="editUserModalTitle" class="modal-title">Edit user</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Nav -->
            <ul class="js-tabs-to-dropdown nav nav-segment nav-fill nav-lg-down-break mb-5" id="editUserModalTab" role="tablist" data-hs-transform-tabs-to-btn-options='{
                  "transformResolution": "lg",
                  "btnClassNames": "btn btn-block btn-white dropdown-toggle justify-content-center mb-3"
                }'>
              <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab">
                  <i class="tio-user-outlined mr-1"></i> Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab">
                  <i class="tio-lock-outlined mr-1"></i> Change password
                </a>
              </li>
            </ul>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="tab-content" id="editUserModalTabContent">
              <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form>
                  <!-- Profile Cover -->
                  <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                      <img id="editProfileCoverImgModal" class="profile-cover-img" src="assets\img\1920x400\img1.jpg" alt="Image Description">

                      <!-- Custom File Cover -->
                      <div class="profile-cover-content profile-cover-btn p-3">
                        <div class="custom-file-btn">
                          <input type="file" class="js-file-attach custom-file-btn-input" id="editProfileCoverUplaoderModal" data-hs-file-attach-options='{
                                      "textTarget": "#editProfileCoverImgModal",
                                      "mode": "image",
                                      "targetAttr": "src",
                                      "allowTypes": [".png", ".jpeg", ".jpg"]
                                   }'>
                          <label class="custom-file-btn-label btn btn-sm btn-white" for="editProfileCoverUplaoderModal">
                            <i class="tio-add-photo"></i>
                            <span class="d-none d-sm-inline-block ml-1">Upload header</span>
                          </label>
                        </div>
                      </div>
                      <!-- End Custom File Cover -->
                    </div>
                  </div>
                  <!-- End Profile Cover -->

                  <!-- Avatar -->
                  <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar mb-5" for="editAvatarUploaderModal">
                    <img id="editAvatarImgModal" class="avatar-img" src="<?=$result['avt'];?>" alt="Image Description">

                    <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal" data-hs-file-attach-options='{
                                "textTarget": "#editAvatarImgModal",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>

                    <span class="avatar-uploader-trigger">
                      <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                    </span>
                  </label>
                  <!-- End Avatar -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">Họ và Tên<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <input type="text" class="form-control" name="editFirstNameModal" id="editFirstNameModalLabel" placeholder="Your name" aria-label="Your name" value="<?=$result['hoten'];?>">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">User Name<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <input type="text" class="form-control" name="editFirstNameModal" id="editFirstNameModalLabel" placeholder="UserName" aria-label="UserName" value="">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->
                  <div class="row form-group">
                    <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">Password<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <input type="password" class="form-control" name="editFirstNameModal" id="editFirstNameModalLabel" placeholder="Password" aria-label="Password" value="">
                      </div>
                    </div>
                  </div>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editEmailModalLabel" class="col-sm-3 col-form-label input-label">Email</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="email" class="form-control" name="editEmailModal" id="editEmailModalLabel" placeholder="Email" aria-label="Email" value="ella@example.com">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editPhoneLabel" class="col-sm-3 col-form-label input-label">Số điện thoại <span class="input-label-secondary">(Bắt buộc)</span></label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-sm-down-break align-items-center">
                        <input type="text" class="js-masked-input form-control" name="phone" id="editPhoneLabel" placeholder="+xx(xxx)xxx-xx-xx" aria-label="+xx(xxx)xxx-xx-xx" value="84(609)972-22-22" data-hs-mask-options='{
                                   "template": "+00(000)000-00-00"
                                 }'>

                        <div class="input-group-append">
                          <!-- Select -->
                          <div class="select2-custom">
                            <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" name="editPhoneSelect" data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "dropdownAutoWidth": true,
                                      "width": "6rem"
                                    }'>
                              <option value="Mobile" selected="">Mobile</option>
                              <option value="Home">Home</option>
                              <option value="Work">Work</option>
                              <option value="Fax">Fax</option>
                              <option value="Direct">Direct</option>
                            </select>
                            <!-- End Select -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editPhoneLabel" class="col-sm-3 col-form-label input-label">Phân Quyền</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" name="role" data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "dropdownAutoWidth": true,
                                      "width": "6rem"
                                    }'>
                          <option value="1">Admin</option>
                          <option value="33">Staff</option>
                          <option value="66">User</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label input-label">Địa chỉ</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="text" class="form-control" name="editOrganizationModal" id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization" value="Htmlstream">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editDepartmentModalLabel" class="col-sm-3 col-form-label input-label">Tiền</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editDepartmentModal" id="editDepartmentModalLabel" placeholder="Your department" aria-label="Your department">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Giới tính</label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="editUserModalAccountTypeModalRadio" id="editUserModalAccountTypeModalRadio1" checked="">
                            <label class="custom-control-label" for="editUserModalAccountTypeModalRadio1">Nam</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->

                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="editUserModalAccountTypeModalRadio" id="editUserModalAccountTypeModalRadio2">
                            <label class="custom-control-label" for="editUserModalAccountTypeModalRadio2">Nữ</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->


                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                <form>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label input-label">Current password</label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <input type="password" class="js-toggle-password form-control" name="currentPassword" id="editUserModalCurrentPasswordLabel" placeholder="Enter current password" aria-label="Enter current password" data-hs-toggle-password-options='{
                                   "target": "#editUserModalChangePassModalTarget",
                                   "defaultClass": "tio-hidden-outlined",
                                   "showClass": "tio-visible-outlined",
                                   "classChangeTarget": "#editUserModalChangePassModalIcon"
                                 }'>
                        <div id="editUserModalChangePassModalTarget" class="input-group-append">
                          <a class="input-group-text" href="javascript:;">
                            <i id="editUserModalChangePassModalIcon" class="tio-visible-outlined"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalNewPassword" class="col-sm-3 col-form-label input-label">New password</label>

                    <div class="col-sm-9">
                      <input type="password" class="js-toggle-password form-control" name="editUserModalNewPassword" id="editUserModalNewPassword" placeholder="Enter new password" aria-label="Enter new password" data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalCheckbox"
                               }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalConfirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm new password</label>

                    <div class="col-sm-9">
                      <input type="password" class="js-toggle-password form-control" name="confirmNewPassword" id="editUserModalConfirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password" data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalCheckbox"
                               }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <div class="col-sm-9 offset-sm-3">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="editUserModalChangePassModalCheckbox" class="custom-control-input">
                        <label class="custom-control-label" for="editUserModalChangePassModalCheckbox">Show password</label>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                <!-- Table -->
                <div class="table-responsive datatable-custom">
                  <table class="table table-thead-bordered table-nowrap table-align-middle table-first-col-px-0">
                    <thead class="thead-light">
                      <tr>
                        <th>Type</th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="assets\svg\illustrations\at-line.svg" alt="Image Description">
                          </div>
                          Email
                        </th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="assets\svg\illustrations\world-line.svg" alt="Image Description">
                          </div>
                          Browser
                        </th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="assets\svg\illustrations\phone-line.svg" alt="Image Description">
                          </div>
                          App
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>New for you</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox1" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox1"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox2">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox2"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox3">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox3"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Account activity <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Get important notifications about you or activity you've missed"></i></td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox4" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox4"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox5" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox5"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox6" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox6"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new browser used to sign in</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox7" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox7"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox8" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox8"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox9" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox9"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new device is linked</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox10">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox10"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox11" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox11"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox12">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox12"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new device connected <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Email me when a new device connected"></i></td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox13">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox13"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox14" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox14"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox15" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox15"></label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->

                <hr>

                <div class="row">
                  <div class="col-sm">
                    <!-- Form Group -->
                    <div class="form-group">
                      <span class="d-block mb-2">When should we send notifications?</span>

                      <!-- Select -->
                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                  "minimumResultsForSearch": "Infinity",
                                  "customClass": "custom-select",
                                  "width": "15rem"
                                }'>
                        <option value="whenToSendNotification1">Always</option>
                        <option value="whenToSendNotification2">Only when I'm online</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm">
                    <!-- Form Group -->
                    <div class="form-group">
                      <span class="d-block mb-2">Send a daily summary ("Daily Digest") of task activity.</span>

                      <div class="form-row">
                        <div class="col-auto">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "customClass": "custom-select",
                                      "dropdownAutoWidth": true,
                                      "width": true
                                    }'>
                            <option value="EveryDay">Every day</option>
                            <option value="weekdays" selected="">Weekdays</option>
                            <option value="Never">Never</option>
                          </select>
                          <!-- End Select -->
                        </div>

                        <div class="col-auto">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "customClass": "custom-select",
                                      "dropdownAutoWidth": true,
                                      "width": true
                                    }'>
                            <option value="0">at 12 AM</option>
                            <option value="1">at 1 AM</option>
                            <option value="2">at 2 AM</option>
                            <option value="3">at 3 AM</option>
                            <option value="4">at 4 AM</option>
                            <option value="5">at 5 AM</option>
                            <option value="6">at 6 AM</option>
                            <option value="7">at 7 AM</option>
                            <option value="8">at 8 AM</option>
                            <option value="9" selected="">at 9 AM</option>
                            <option value="10">at 10 AM</option>
                            <option value="11">at 11 AM</option>
                            <option value="12">at 12 PM</option>
                            <option value="13">at 1 PM</option>
                            <option value="14">at 2 PM</option>
                            <option value="15">at 3 PM</option>
                            <option value="16">at 4 PM</option>
                            <option value="17">at 5 PM</option>
                            <option value="18">at 6 PM</option>
                            <option value="19">at 7 PM</option>
                            <option value="20">at 8 PM</option>
                            <option value="21">at 9 PM</option>
                            <option value="22">at 10 PM</option>
                            <option value="23">at 11 PM</option>
                          </select>
                          <!-- End Select -->
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>

                <p>In order to cut back on noise, email notifications are grouped together and only sent when you're idle or offline.</p>

                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
            <!-- End Tab Content -->
          </div>
          <!-- End Body -->
        </div>
      </div>
    </div>
<?php
  }
}
?>
<!-- End Edit user Modal -->
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


    // INITIALIZATION OF SHOW PASSWORD
    // =======================================================
    $('.js-toggle-password').each(function() {
      new HSTogglePassword(this).init()
    });


    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });


    // INITIALIZATION OF TABS
    // =======================================================
    $('.js-tabs-to-dropdown').each(function() {
      var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
    });


    // INITIALIZATION OF STEP FORM
    // =======================================================
    $('.js-step-form').each(function() {
      var stepForm = new HSStepForm($(this), {
        finish: function() {
          $("#addUserStepFormProgress").hide();
          $("#addUserStepFormContent").hide();
          $("#successMessageContent").show();
        }
      }).init();
    });


    // INITIALIZATION OF MASKED INPUT
    // =======================================================
    $('.js-masked-input').each(function() {
      var mask = $.HSCore.components.HSMask.init($(this));
    });


    // INITIALIZATION OF SELECT2
    // =======================================================
    $('.js-select2-custom').each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });


    // INITIALIZATION OF COUNTERS
    // =======================================================
    $('.js-counter').each(function() {
      var counter = new HSCounter($(this)).init();
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copy',
          className: 'd-none'
        },
        {
          extend: 'excel',
          className: 'd-none'
        },
        {
          extend: 'csv',
          className: 'd-none'
        },
        {
          extend: 'pdf',
          className: 'd-none'
        },
        {
          extend: 'print',
          className: 'd-none'
        },
      ],
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: '<div class="text-center p-4">' +
          '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
          '<p class="mb-0">No data to show</p>' +
          '</div>'
      }
    });

    $('#export-copy').click(function() {
      datatable.button('.buttons-copy').trigger()
    });

    $('#export-excel').click(function() {
      datatable.button('.buttons-excel').trigger()
    });

    $('#export-csv').click(function() {
      datatable.button('.buttons-csv').trigger()
    });

    $('#export-pdf').click(function() {
      datatable.button('.buttons-pdf').trigger()
    });

    $('#export-print').click(function() {
      datatable.button('.buttons-print').trigger()
    });

    $('.js-datatable-filter').on('change', function() {
      var $this = $(this),
        elVal = $this.val(),
        targetColumnIndex = $this.data('target-column-index');

      datatable.column(targetColumnIndex).search(elVal).draw();
    });

    $('#datatableSearch').on('mouseup', function(e) {
      var $input = $(this),
        oldValue = $input.val();

      if (oldValue == "") return;

      setTimeout(function() {
        var newValue = $input.val();

        if (newValue == "") {
          // Gotcha
          datatable.search('').draw();
        }
      }, 1);
    });


    // INITIALIZATION OF QUICK VIEW POPOVER
    // =======================================================
    $('#editUserPopover').popover('show');

    $(document).on('click', '#closeEditUserPopover', function() {
      $('#editUserPopover').popover('dispose');
    });

    $('#editUserModal').on('show.bs.modal', function() {
      $('#editUserPopover').popover('dispose');
    });


    // DARK POPOVER
    // =======================================================
    $('[data-toggle="popover-dark"]').on('shown.bs.popover', function() {
      $('.popover').last().addClass('popover-dark')
    })
  });
</script>

<!-- IE Support -->

<?php
require './inc/footer.php';
?>