<?php require_once '../system/db.php';
require_once './inc/header.php';
$page = isset($_GET['page']) ? $_GET['page'] : 1;

switch ($page) {
  case 'list':

    if ($row['role'] != 1) {
      header('location: /');
      die();
    }
    $loai = new Category();
    if (isset($_GET['delid'])) {
      $id = $_GET['delid'];
      $delloai = $loai->del_category($id);
      $delloaiarray = explode(",", $id);

      foreach ($delloaiarray as $id) {
        $delloaiarr = $loai->del_category($id);
      }
    }
?>
    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">

        <!-- Breadcrumb -->
        <div class="page-header">
          <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="category-list.php">Category</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>
              </nav>

              <h1 class="page-header-title"><a href="javascript:void(0);" onclick="navigateAndScroll();" style="color: #e4e6eb">Category List</a></h1>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-primary" href="?page=add&category-add.php">
                <i class="fa-solid fa-list"></i> Add category
              </a>
            </div>
          </div>
        </div>

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
                      </div>
                    </div>
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

                </div>
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->

          <!-- Table -->
          <?php
          if (isset($deloai)) {
            echo $delloai;
          }
          ?>
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
                      <label class="custom-control-label" for="datatableCheckAll">STT</label>
                    </div>
                  </th>
                  <th></th>
                  <th class="table-column-pl-0">Tên Loại Đồ Uống</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <?php
                  if (isset($delloaiarr)) {
                    echo $delloaiarr;
                  }
                  ?>
                  <th>
                    <div id="editUserPopover" data-toggle="popover-dark" data-placement="left" title="<div class='d-flex align-items-center'>Edit user <a href='#!' class='close close-light ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>" data-content="Check out this Edit user modal example." data-html="true">
                      <a class="btn btn-sm btn-white" href="?delid=<?php echo $result['categoryID'] ?>" id="deleteButton">
                        <i class="fa-solid fa-xmark"></i> Xóa
                      </a>
                    </div>
                  </th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                <?php
                $show_category = $loai->show_category();
                if ($show_category) {
                  $i = 0;
                  while ($result = $show_category->fetch_assoc()) {
                    $i++;
                ?>
                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="selectedCategories[]" id="usersDataCheck<?php echo $i ?>">
                          <label class="custom-control-label" for="usersDataCheck<?php echo $i ?>"><?php echo $result['categoryID'] ?></label>
                        </div>
                      </td>
                      <td>
                        <span class="d-block h5 mb-0"></span>
                        <span class="d-block font-size-sm"></span>
                      </td>
                      <td class="table-column-pl-0">
                        <div class="ml-3">
                          <span class="d-block h5 text-hover-primary mb-0"><?php echo $result['categoryName'] ?></span>
                        </div>
                      </td>
                      <td><span class="text-hide"></span></td>
                      <td></td>
                      <td></td>
                      <td>
                        <div class="d-flex">
                          <div id="editUserPopover" data-toggle="popover-dark" data-placement="left" title="<div class='d-flex align-items-center'>Edit category <a href='#!' class='close close-light ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>" data-content="Check out this Edit user modal example." data-html="true">
                            <a class="btn btn-sm btn-white" href="?page=edit&categoryID=<?php echo $result['categoryID'] ?>">
                              <!-- data-toggle="modal" data-target="#editUserModal" -->
                              <i class="tio-edit"></i>Edit
                            </a>
                          </div>
                          <span style="font-size: 24px;">||</span>
                          <div id="editUserPopover" data-toggle="popover-dark" data-placement="left" title="<div class='d-flex align-items-center'>Edit user <a href='#!' class='close close-light ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>" data-content="Check out this Edit user modal example." data-html="true">
                            <a class="btn btn-sm btn-white" href="?delid=<?php echo $result['categoryID'] ?>" onclick="return confirm('Bạn có muốn xóa?')">
                              <i class="fa-solid fa-xmark"></i> Xóa
                            </a>
                          </div>
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




        <?php
        require_once 'inc/footer.php';

        break;
      case 'edit':

        if ($row['role'] != 1) {
          header('location: /');
          die();
        }
        $loai = new Category();
        if (!isset($_GET['categoryID']) || $_GET['categoryID'] == null) {
          echo "<script>window.location = 'category-page.php?page=list'<?script>";
        } else {
          $id = $_GET['categoryID'];
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $categoryName = $_POST['categoryName'];
          $updid = $loai->update_category($id, $categoryName);
        }
        ?>
          <main id="content" role="main" class="main">
            <!-- Content -->
            <div class="content container-fluid">
              <!-- Breadcrumb -->
              <div class="page-header">
                <div class="row align-items-end">
                  <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="category-page.php?page=list">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                      </ol>
                    </nav>
                    <h1 class="page-header-title">Edit Category</h1>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <!-- Body -->
                <div class="modal-body">
                  <!-- Nav -->
                  <ul class="js-tabs-to-dropdown nav nav-segment nav-fill nav-lg-down-break mb-5" id="editUserModalTab" role="tablist" data-hs-transform-tabs-to-btn-options='{
                  "transformResolution": "lg",
                  "btnClassNames": "btn btn-block btn-white dropdown-toggle justify-content-center mb-3"
                }'>
                    <li class="nav-item">
                      <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab">Cập nhật sản phẩm</a>
                  </ul>
                  <!-- End Nav -->

                  <!-- Tab Content -->
                  <div class="tab-content" id="editUserModalTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <?php
                      if (isset($updid)) {
                        echo $updid;
                      }
                      ?>
                      <?php
                      $getcategory = $loai->getcategory($id);
                      if ($getcategory) {
                        while ($result = $getcategory->fetch_assoc()) {

                      ?>
                          <form action="" method="POST">
                            <!-- Form Group -->
                            <div class="row form-group">
                              <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label" style="color: #ccc">Tên Loại Sản Phẩm<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tên sản phẩm."></i></label>

                              <div class="col-sm-9">
                                <div class="js-form-message input-group input-group-sm-down-break">
                                  <input type="text" class="form-control" name="categoryName" id="editCategoryLabel" placeholder="Tên loại" aria-label="Tên loại" value="<?php echo $result['categoryName'] ?>">
                                </div>
                              </div>
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-end">
                              <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close"><a href="category-list.php">Quay lại</a></button>
                              <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                          </form>

                      <?php
                        }
                      }
                      ?>
                    </div>
                    <!-- End Tab Content -->
                  </div>
                  <!-- End Body -->
                </div>
              </div>
            </div>
            <!-- End Edit user Modal -->
            <!-- ========== END SECONDARY CONTENTS ========== -->



          <?php
          require_once 'inc/footer.php';

          break;
        case 'add':


          if ($row['role'] != 1) {
            header('location: /');
            die();
          }
          $loai = new Category();
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryName = $_POST['categoryName'];
            $addlid = $loai->insert_category($categoryName);
          }
          ?>
            <main id="content" role="main" class="main">
              <!-- Content -->
              <div class="content container-fluid">

                <div class="page-header">
                  <div class="row align-items-end">
                    <div class="col-sm mb-2 mb-sm-0">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                          <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                          <li class="breadcrumb-item"><a class="breadcrumb-link" href="category-page.php?page=list">Category</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Overview</li>
                        </ol>
                      </nav>
                      <h1 class="page-header-title">Add Category</h1>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- Card -->
                <div class="card">
                  <!-- Body -->
                  <div class="modal-body">
                    <!-- Nav -->
                    <ul class="js-tabs-to-dropdown nav nav-segment nav-fill nav-lg-down-break mb-5" id="editUserModalTab" role="tablist" data-hs-transform-tabs-to-btn-options='{
                  "transformResolution": "lg",
                  "btnClassNames": "btn btn-block btn-white dropdown-toggle justify-content-center mb-3"
                }'>
                      <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab">Thêm loại sản phẩm</a>
                    </ul>
                    <!-- End Nav -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="editUserModalTabContent">
                      <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <?php
                        if (isset($addlid)) {
                          echo $addlid;
                        }
                        ?>

                        <form action="category-page.php?page=add&category-add.php" method="POST">
                          <!-- Form Group -->
                          <div class="row form-group">
                            <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label" style="color: #fff">Tên Loại Sản Phẩm<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tên loại sản phẩm."></i></label>

                            <div class="col-sm-9">
                              <div class="js-form-message input-group input-group-sm-down-break">
                                <input type="text" class="form-control" name="categoryName" id="editCategoryLabel" placeholder="Tên loại" aria-label="Tên loại" val="">
                              </div>
                            </div>
                          </div>
                          <!-- End Form Group -->

                          <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                          </div>
                        </form>


                      </div>
                      <!-- End Tab Content -->
                    </div>
                    <!-- End Body -->
                  </div>
                </div>
              </div>
              <!-- End Edit user Modal -->
              <!-- ========== END SECONDARY CONTENTS ========== -->


          <?php
          require_once 'inc/footer.php';

          break;
        default:
          require_once 'category-page.php';
      }
          ?>