<?php
$page_admin = true;

require_once '../system/db.php';
require_once './inc/header.php';
require_once '../login.php';
$page = isset($_GET['page']) ? $_GET['page'] : 1;

switch ($page) {
    case 'list':
        if ($row['role'] != 1) {
            header('location: /tea/');
            die();
        }
        $sp = new Product();
        if (isset($_GET['delid'])) {
        }
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
                                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                                </ol>
                            </nav>

                            <h1 class="page-header-title">Products</h1>
                        </div>

                        <div class="col-sm-auto">
                            <a class="btn btn-primary" href="product-page.php?page=add">
                                <i class="fa-brands fa-product-hunt"></i> Add product
                            </a>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Page Header -->


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
                                                selected
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
                                        <div class="custom-control custom-checkbox" style="margin-right: 32px;">
                                            <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label" for="datatableCheckAll">ID</label>
                                        </div>
                                    </th>
                                    <th class="table-column-pl-0">Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Mô tả</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php
                            $show_product = $sp->show_product();
                            if ($show_product) {
                                $i = 0;
                                while ($result = $show_product->fetch_assoc()) {
                                    $i++;
                            ?>

                                    <tbody>
                                        <tr>
                                            <td class="table-column-pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                                                    <label class="custom-control-label" for="usersDataCheck1"><?php echo $result['productID'] ?></label>
                                                </div>
                                            </td>
                                            <td class="table-column-pl-0">
                                                <a class="d-flex align-items-center" href="user-profile.html">
                                                    <div class="avatar avatar-circle">
                                                        <img class="avatar-img" src="<?php echo $result['img'] ?>" alt="Image Description">
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="d-block h5 text-hover-primary mb-0"><?php echo $result['productName'] ?><i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="d-block h5 mb-0"><?php echo $result['price'] ?></span>
                                            </td>
                                            <td>
                                                <span class="d-block h5 mb-0"><?php echo $result['description'] ?></span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="d-flex" style="justify-content: flex-end;">
                                                    <div id="editUserPopover" data-toggle="popover-dark" data-placement="left" title="<div class='d-flex align-items-center'>Edit user <a href='#!' class='close close-light ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>" data-content="Check out this Edit user modal example." data-html="true">
                                                        <a class="btn btn-sm btn-white" href="product-page.php?page=edit&productID=<?php echo $result['productID'] ?>">
                                                            <i class="tio-edit"></i> Edit
                                                        </a>
                                                    </div>
                                                    <span style="font-size: 24px;">||</span>
                                                    <div id="editUserPopover" data-toggle="popover-dark" data-placement="left" title="<div class='d-flex align-items-center'>Edit user <a href='#!' class='close close-light ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>" data-content="Check out this Edit user modal example." data-html="true">
                                                        <a class="btn btn-sm btn-white" href="javascript:;">
                                                            <i class="fa-solid fa-xmark"></i> Xóa
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                            <?php
                                }
                            }
                            ?>

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
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== SECONDARY CONTENTS ========== -->

        <!-- ========== END SECONDARY CONTENTS ========== -->


    <?php
        require_once './inc/footer.php';
        break;

    case 'edit':

        if ($row['role'] != 1) {
            header('location: /tea/');
            die();
        }
        $sp = new Product();
        if (!isset($_GET['productID']) || $_GET['productID'] == null) {
            echo "<script>window.location = 'product-page.php?page=list'<?script>";
        } else {
            $id = $_GET['productID'];
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productName = $_POST['productName'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $updid = $sp->update_product($id, $productName, $price, $description);
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
                                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="product-page.php?page=list">Product</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                                </ol>
                            </nav>
                            <h1 class="page-header-title">Edit Product</h1>
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
                                $getproduct = $sp->getproduct($id);
                                if ($getproduct) {
                                    while ($result = $getproduct->fetch_assoc()) {

                                ?>
                                        <?php
                                        $get_id = $_GET['productID'];
                                        $sql = "select img from product where productID=$get_id";
                                        $res = mysqli_query($db, $sql);

                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {

                                        ?>

                                                <form action="upload-img.php" method="POST" id="updateForm" enctype="multipart/form-data">
                                                    <div class="text-center mb-5">
                                                        <!-- Avatar -->
                                                        <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
                                                            <img id="avatarImg" class="avatar-img" src="<?php echo $row['img'] ?>" alt="Image Description">

                                                            <input type="file" class="js-file-attach avatar-uploader-input" name="img" id="avatarUploader" onchange="updateImage('upload-img.php','<?= $get_id; ?>')" data-hs-file-attach-options='{
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

                                                    </div>
                                                </form>
                                        <?php

                                            }
                                        } ?>

                                        <form action="product-page.php?page=edit&productID=<?php echo $result['productID']; ?>" method="POST">
                                            <!-- Form Group -->
                                            <div class="row form-group">
                                                <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label" style="color: #ccc">Tên Loại Sản Phẩm:<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tên sản phẩm."></i></label>

                                                <div class="col-sm-9">
                                                    <div class="js-form-message input-group input-group-sm-down-break">
                                                        <input type="text" class="form-control" name="productName" id="editProductName" placeholder="Tên loại" aria-label="Tên loại" value="<?php echo $result['productName'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- Form Group -->
                                            <div class="row form-group">
                                                <label for="editEmailModalLabel" class="col-sm-3 col-form-label input-label" style="color: #ccc">Giá:</label>

                                                <div class="col-sm-9">
                                                    <div class="js-form-message">
                                                        <input type="text" class="form-control" name="price" id="editPrice" placeholder="Email" aria-label="Email" value="<?php echo $result['price'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- Form Group -->
                                            <div class="row form-group">
                                                <label for="editEmailModalLabel" class="col-sm-3 col-form-label input-label" style="color: #ccc">Mô tả:</label>

                                                <div class="col-sm-9">
                                                    <div class="js-form-message">
                                                        <input type="text" class="form-control" name="description" id="editDescription" placeholder="Email" aria-label="Email" value="<?php echo $result['description'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close"><a href="product-page.php?page=list">Quay lại</a></button>
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
        </main>

    <?php
        require_once './inc/footer.php';
        break;


    case 'add':

        if ($row['role'] != 1) {
            header('location: /tea/');
            die();
        }
        $sp = new Product();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productName = $_POST['productName'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $img = $_POST['img'];
            $addid = $sp->insert_product($productName, $price, $description, $img);
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
                                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="product-page.php?page=list">Product</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                                </ol>
                            </nav>
                            <h1 class="page-header-title">Add Product</h1>
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
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab">Thêm sản phẩm</a>
                        </ul>
                        <!-- End Nav -->

                        <!-- Tab Content -->
                        <div class="tab-content" id="editUserModalTabContent">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <?php
                                if (isset($addid)) {
                                    echo $addid;
                                }
                                ?>


                                <form action="product-page.php?page=add&product-add.php" method="POST" id="updateForm" enctype="multipart/form-data">
                                    <div class="text-center mb-5">
                                        <!-- Avatar -->
                                        <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
                                            <img id="avatarImg" class="avatar-img" src="" alt="">

                                            <input type="file" class="js-file-attach avatar-uploader-input" name="img" id="avatarUploader" data-hs-file-attach-options='{
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

                                    </div>




                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label" style="color: #ccc">Tên Loại Sản Phẩm:<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tên sản phẩm."></i></label>

                                        <div class="col-sm-9">
                                            <div class="js-form-message input-group input-group-sm-down-break">
                                                <input type="text" class="form-control" name="productName" id="editProductName" placeholder="Tên loại" aria-label="Tên loại" value="Tên sản phẩm">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="editEmailModalLabel" class="col-sm-3 col-form-label input-label" style="color: #ccc">Giá:</label>

                                        <div class="col-sm-9">
                                            <div class="js-form-message">
                                                <input type="text" class="form-control" name="price" id="editPrice" placeholder="Email" aria-label="Email" value="Gía sản phẩm">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="editEmailModalLabel" class="col-sm-3 col-form-label input-label" style="color: #ccc">Mô tả:</label>

                                        <div class="col-sm-9">
                                            <div class="js-form-message">
                                                <input type="text" class="form-control" name="description" id="editDescription" placeholder="Email" aria-label="Email" value="Mô tả">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close"><a href="product-page.php?page=list">Quay lại</a></button>
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </form>

                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Body -->
                    </div>
                </div>
            </div>
        </main>
<?php
        require_once('./inc/footer.php');
        break;
    default:
        require_once 'product-page.php';

        break;
}

?>