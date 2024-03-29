﻿<?php
  require '../admin/inc/header.php'
?>

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-products.html">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product details</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Tiro track jacket</h1>
              
              <div class="mt-2">
                <a class="text-body mr-3" href="javascript:;">
                  <i class="tio-copy mr-1"></i> Duplicate
                </a>
                <a class="text-body" href="javascript:;">
                  <i class="tio-visible-outlined mr-1"></i> Preview
                </a>
              </div>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1" href="#" data-toggle="tooltip" data-placement="top" title="Previous product">
                <i class="tio-arrow-backward"></i>
              </a>
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Next product">
                <i class="tio-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- End Page Header -->
  
        <div class="row">
          <div class="col-lg-8">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Product information</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Form Group -->
                <div class="form-group">
                  <label for="productNameLabel" class="input-label">Name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>

                  <input type="text" class="form-control" name="productName" id="productNameLabel" placeholder="Shirt, t-shirts, etc." aria-label="Shirt, t-shirts, etc." value="Tiro track jacket">
                </div>
                <!-- End Form Group -->

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="SKULabel" class="input-label">SKU</label>

                      <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="eg. 348121032" aria-label="eg. 348121032" value="124617209">
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm-6">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="weightLabel" class="input-label">Weight</label>
      
                      <div class="input-group input-group-merge">
                        <input type="text" class="form-control" name="weightName" id="weightLabel" placeholder="0.0" aria-label="0.0" value="0.2">
                        <div class="input-group-append">
                          <!-- Select -->
                          <div id="priceSelect" class="select2-custom">
                            <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                      "dropdownParent": "#priceSelect",
                                      "dropdownAutoWidth": true,
                                      "width": true
                                    }'>
                              <option value="lb">lb</option>
                              <option value="oz">oz</option>
                              <option value="kg" selected="">kg</option>
                              <option value="g">g</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                      </div>
                      
                      <small class="form-text">Used to calculate shipping rates at checkout and label prices during fulfillment.</small>
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>
                <!-- End Row -->

                <label class="input-label">Description <span class="input-label-secondary">(Optional)</span></label>

                <!-- Quill -->
                <div class="quill-custom">
                  <div class="js-quill" style="min-height: 15rem;" data-hs-quill-options='{
                          "placeholder": "Type your description..."
                         }'>
                        <p>Train hard. Stay dry. This soccer jacket is made of soft, sweat-wicking fabric that keeps you moving on the practice field. Stretch panels at the elbows and sides give you a full range of motion as you work.</p>
                        <p><br></p>
                        <h3>Specifications</h3>
                        <ul>
                          <li>Regular fit is wider at the body, with a straight silhouette</li>
                          <li>Ribbed stand-up collar</li>
                          <li>Long sleeves with ribbed cuffs</li>
                          <li>100% polyester doubleknit</li>
                          <li>Front zip pockets; Full zip; Ribbing details; Ribbed hem</li>
                        </ul>
                  </div>
                </div>
                <!-- End Quill -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Media</h4>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-sm btn-ghost-secondary" href="javascript:;" data-hs-unfold-options='{
                       "target": "#mediaDropdown",
                       "type": "css-animation"
                     }'>
                    Add media from URL <i class="tio-chevron-down"></i>
                  </a>

                  <div id="mediaDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#addImageFromURLModal">
                      <i class="tio-link dropdown-item-icon"></i> Add image from URL
                    </a>
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#embedVideoModal">
                      <i class="tio-youtube-outlined dropdown-item-icon"></i> Embed video
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Gallery -->
                <div id="fancyboxGallery" class="js-fancybox row justify-content-sm-center gx-2" data-hs-fancybox-options='{
                       "selector": "#fancyboxGallery .js-fancybox-item"
                     }'>
                  <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card card-sm">
                      <img class="card-img-top" src="assets\img\400x400\img7.jpg" alt="Image Description">

                      <div class="card-body">
                        <div class="row text-center">
                          <div class="col">
                            <a class="js-fancybox-item text-body" href="javascript:;" data-toggle="tooltip" data-placement="top" title="View" data-src="./assets/img/725x1080/img1.jpg" data-caption="Image #01">
                              <i class="tio-visible-outlined"></i>
                            </a>
                          </div>

                          <div class="col column-divider">
                            <a class="text-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">
                              <i class="tio-delete-outlined"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>

                  <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card card-sm">
                      <img class="card-img-top" src="assets\img\400x400\img8.jpg" alt="Image Description">

                      <div class="card-body">
                        <div class="row text-center">
                          <div class="col">
                            <a class="js-fancybox-item text-body" href="javascript:;" data-toggle="tooltip" data-placement="top" title="View" data-src="./assets/img/1920x1080/img1.jpg" data-caption="Image #02">
                              <i class="tio-visible-outlined"></i>
                            </a>
                          </div>

                          <div class="col column-divider">
                            <a class="text-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">
                              <i class="tio-delete-outlined"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>

                  <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card card-sm">
                      <img class="card-img-top" src="assets\img\400x400\img9.jpg" alt="Image Description">

                      <div class="card-body">
                        <div class="row text-center">
                          <div class="col">
                            <a class="js-fancybox-item text-body" href="javascript:;" data-toggle="tooltip" data-placement="top" title="View" data-src="./assets/img/1920x1080/img2.jpg" data-caption="Image #03">
                              <i class="tio-visible-outlined"></i>
                            </a>
                          </div>

                          <div class="col column-divider">
                            <a class="text-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">
                              <i class="tio-delete-outlined"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>

                  <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card card-sm">
                      <img class="card-img-top" src="assets\img\400x400\img10.jpg" alt="Image Description">

                      <div class="card-body">
                        <div class="row text-center">
                          <div class="col">
                            <a class="js-fancybox-item text-body" href="javascript:;" data-toggle="tooltip" data-placement="top" title="View" data-src="./assets/img/1920x1080/img3.jpg" data-caption="Image #04">
                              <i class="tio-visible-outlined"></i>
                            </a>
                          </div>

                          <div class="col column-divider">
                            <a class="text-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">
                              <i class="tio-delete-outlined"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
                <!-- End Gallery -->

                <!-- Dropzone -->
                <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
                  <div class="dz-message custom-file-boxed-label">
                    <img class="avatar avatar-xl avatar-4by3 mb-3" src="assets\svg\illustrations\browse.svg" alt="Image Description">
                    <h5 class="mb-1">Choose files to upload</h5>
                    <p class="mb-2">or</p>
                    <span class="btn btn-sm btn-primary">Browse files</span>
                  </div>
                </div>
                <!-- End Dropzone -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="js-add-field card mb-3 mb-lg-5" data-hs-add-field-options='{
                  "template": "#addVariantsTemplate",
                  "container": "#addVariantsContainer",
                  "defaultCreated": 0,
                  "limit": 100
                }'>
              <!-- Header -->
              <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                  <div class="col-12 col-sm mb-3 mb-sm-0">
                    <h4 class="card-header-title">Variants</h4>
                  </div>
    
                  <div class="col-auto">
                    <div class="d-flex align-items-center">
                      <!-- Datatable Info -->
                      <div id="datatableCounterInfo" style="display: none;">
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

                      <a class="js-create-field btn btn-sm btn-ghost-secondary" href="javascript:;">
                        <i class="tio-add"></i> Add variant
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- End Header -->

              <!-- Table -->
              <div class="table-responsive datatable-custom">
                <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                         "columnDefs": [{
                            "targets": [0, 1, 6],
                            "orderable": false
                          }],
                         "order": [],
                         "pageLength": 15,
                         "isResponsive": false,
                         "isShowPaging": false
                       }'>
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                          <label class="custom-control-label" for="datatableCheckAll"></label>
                        </div>
                      </th>
                      <th></th>
                      <th class="table-column-pl-0">Size</th>
                      <th class="table-column-pl-0">Color</th>
                      <th class="table-column-pl-0">Price</th>
                      <th class="table-column-pl-0">Quantity</th>
                      <th class="table-column-pl-0"></th>
                    </tr>
                  </thead>

                  <tbody id="addVariantsContainer">
                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck1">
                          <label class="custom-control-label" for="productVariationsCheck1"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="S">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="White">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="45.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="10">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck2">
                          <label class="custom-control-label" for="productVariationsCheck2"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="M">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="White">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="45.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="10">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck3">
                          <label class="custom-control-label" for="productVariationsCheck3"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="L">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="White">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="45.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="10">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck4">
                          <label class="custom-control-label" for="productVariationsCheck4"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="XL">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="White">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="45.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="10">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck5">
                          <label class="custom-control-label" for="productVariationsCheck5"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="S">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="Black">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="45.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="10">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck6">
                          <label class="custom-control-label" for="productVariationsCheck6"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="M">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="Black">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="45.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="10">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck7">
                          <label class="custom-control-label" for="productVariationsCheck7"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="L">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="Black">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="45.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="10">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck8">
                          <label class="custom-control-label" for="productVariationsCheck8"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="XL">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="Black">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="45.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="10">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck9">
                          <label class="custom-control-label" for="productVariationsCheck9"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="S">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="Orange">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="50.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="5">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck10">
                          <label class="custom-control-label" for="productVariationsCheck10"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="M">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="Orange">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="50.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="5">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck11">
                          <label class="custom-control-label" for="productVariationsCheck11"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="L">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="Orange">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="50.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="5">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="productVariationsCheck12">
                          <label class="custom-control-label" for="productVariationsCheck12"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="assets\img\400x400\img7.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="XL">
                      </th>
                      <th class="table-column-pl-0">
                        <input type="text" class="form-control" value="Orange">
                      </th>
                      <th class="table-column-pl-0">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <div class="input-group-text">USD</div>
                          </div>
                          <input type="text" class="form-control pl-8" value="50.00">
                        </div>
                      </th>
                      <th class="table-column-pl-0">
                        <!-- Quantity Counter -->
                        <div class="js-quantity-counter input-group-quantity-counter">
                          <input type="number" class="js-result form-control input-group-quantity-counter-control" value="5">

                          <div class="input-group-quantity-counter-toggle">
                            <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-remove"></i>
                            </a>
                            <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                              <i class="tio-add"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Quantity Counter -->
                      </th>
                      <th class="table-column-pl-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="tio-edit"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="tio-delete-outlined"></i>
                          </a>
                        </div>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table -->

              <!-- Footer -->
              <div class="card-footer">
                <a class="js-create-field btn btn-sm btn-ghost-secondary" href="javascript:;">
                  <i class="tio-add"></i> Add variant
                </a>
              </div>
              <!-- End Footer -->

              <!-- Add Variants Field -->
              <table style="display: none;">
                <tr id="addVariantsTemplate">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="productVariationsCheck13">
                      <label class="custom-control-label" for="productVariationsCheck13"></label>
                    </div>
                  </td>
                  <th>
                    <img class="avatar" src="assets\img\400x400\img2.jpg" alt="Image Description">
                  </th>
                  <th class="table-column-pl-0">
                    <input type="text" class="form-control">
                  </th>
                  <th class="table-column-pl-0">
                    <input type="text" class="form-control">
                  </th>
                  <th class="table-column-pl-0">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <div class="input-group-text">USD</div>
                      </div>
                      <input type="text" class="form-control pl-8">
                    </div>
                  </th>
                  <th class="table-column-pl-0">
                    <!-- Quantity Counter -->
                    <div class="js-quantity-counter-dynamic input-group-quantity-counter">
                      <input type="number" class="js-result form-control input-group-quantity-counter-control" value="1">

                      <div class="input-group-quantity-counter-toggle">
                        <a class="js-minus input-group-quantity-counter-btn" href="javascript:;">
                          <i class="tio-remove"></i>
                        </a>
                        <a class="js-plus input-group-quantity-counter-btn" href="javascript:;">
                          <i class="tio-add"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Quantity Counter -->
                  </th>
                  <th class="table-column-pl-0">
                    <div class="btn-group" role="group" aria-label="Edit group">
                      <a class="btn btn-white" href="#">
                        <i class="tio-edit"></i> Edit
                      </a>
                      <a class="btn btn-white" href="#">
                        <i class="tio-delete-outlined"></i>
                      </a>
                    </div>
                  </th>
                </tr>
              </table>
              <!-- End Add Variants Field -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-4">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Pricing</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Form Group -->
                <div class="form-group">
                  <label for="priceNameLabel" class="input-label">Price</label>
  
                  <div class="input-group">
                    <input type="text" class="form-control" name="priceName" id="priceNameLabel" placeholder="0.00" aria-label="0.00" value="45.00">

                    <div class="input-group-append">
                      <!-- Select -->
                      <div id="priceCurrencySelect" class="select2-custom select2-custom-right">
                        <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                  "dropdownParent": "#priceCurrencySelect",
                                  "dropdownAutoWidth": true,
                                  "width": true
                                }'>
                          <option value="USD" selected="">USD</option>
                          <option value="AED">AED</option>
                          <option value="AFN">AFN</option>
                          <option value="ALL">ALL</option>
                          <option value="AMD">AMD</option>
                          <option value="ANG">ANG</option>
                          <option value="AOA">AOA</option>
                          <option value="ARS">ARS</option>
                          <option value="AUD">AUD</option>
                          <option value="AWG">AWG</option>
                          <option value="AZN">AZN</option>
                          <option value="BAM">BAM</option>
                          <option value="BBD">BBD</option>
                          <option value="BDT">BDT</option>
                          <option value="BGN">BGN</option>
                          <option value="BIF">BIF</option>
                          <option value="BMD">BMD</option>
                          <option value="BND">BND</option>
                          <option value="BOB">BOB</option>
                          <option value="BRL">BRL</option>
                          <option value="BSD">BSD</option>
                          <option value="BWP">BWP</option>
                          <option value="BZD">BZD</option>
                          <option value="CAD">CAD</option>
                          <option value="CDF">CDF</option>
                          <option value="CHF">CHF</option>
                          <option value="CLP">CLP</option>
                          <option value="CNY">CNY</option>
                          <option value="COP">COP</option>
                          <option value="CRC">CRC</option>
                          <option value="CVE">CVE</option>
                          <option value="CZK">CZK</option>
                          <option value="DJF">DJF</option>
                          <option value="DKK">DKK</option>
                          <option value="DOP">DOP</option>
                          <option value="DZD">DZD</option>
                          <option value="EGP">EGP</option>
                          <option value="ETB">ETB</option>
                          <option value="EUR">EUR</option>
                          <option value="FJD">FJD</option>
                          <option value="FKP">FKP</option>
                          <option value="GBP">GBP</option>
                          <option value="GEL">GEL</option>
                          <option value="GIP">GIP</option>
                          <option value="GMD">GMD</option>
                          <option value="GNF">GNF</option>
                          <option value="GTQ">GTQ</option>
                          <option value="GYD">GYD</option>
                          <option value="HKD">HKD</option>
                          <option value="HNL">HNL</option>
                          <option value="HRK">HRK</option>
                          <option value="HTG">HTG</option>
                          <option value="HUF">HUF</option>
                          <option value="IDR">IDR</option>
                          <option value="ILS">ILS</option>
                          <option value="INR">INR</option>
                          <option value="ISK">ISK</option>
                          <option value="JMD">JMD</option>
                          <option value="JPY">JPY</option>
                          <option value="KES">KES</option>
                          <option value="KGS">KGS</option>
                          <option value="KHR">KHR</option>
                          <option value="KMF">KMF</option>
                          <option value="KRW">KRW</option>
                          <option value="KYD">KYD</option>
                          <option value="KZT">KZT</option>
                          <option value="LAK">LAK</option>
                          <option value="LBP">LBP</option>
                          <option value="LKR">LKR</option>
                          <option value="LRD">LRD</option>
                          <option value="LSL">LSL</option>
                          <option value="MAD">MAD</option>
                          <option value="MDL">MDL</option>
                          <option value="MGA">MGA</option>
                          <option value="MKD">MKD</option>
                          <option value="MMK">MMK</option>
                          <option value="MNT">MNT</option>
                          <option value="MOP">MOP</option>
                          <option value="MRO">MRO</option>
                          <option value="MUR">MUR</option>
                          <option value="MVR">MVR</option>
                          <option value="MWK">MWK</option>
                          <option value="MXN">MXN</option>
                          <option value="MYR">MYR</option>
                          <option value="MZN">MZN</option>
                          <option value="NAD">NAD</option>
                          <option value="NGN">NGN</option>
                          <option value="NIO">NIO</option>
                          <option value="NOK">NOK</option>
                          <option value="NPR">NPR</option>
                          <option value="NZD">NZD</option>
                          <option value="PAB">PAB</option>
                          <option value="PEN">PEN</option>
                          <option value="PGK">PGK</option>
                          <option value="PHP">PHP</option>
                          <option value="PKR">PKR</option>
                          <option value="PLN">PLN</option>
                          <option value="PYG">PYG</option>
                          <option value="QAR">QAR</option>
                          <option value="RON">RON</option>
                          <option value="RSD">RSD</option>
                          <option value="RUB">RUB</option>
                          <option value="RWF">RWF</option>
                          <option value="SAR">SAR</option>
                          <option value="SBD">SBD</option>
                          <option value="SCR">SCR</option>
                          <option value="SEK">SEK</option>
                          <option value="SGD">SGD</option>
                          <option value="SHP">SHP</option>
                          <option value="SLL">SLL</option>
                          <option value="SOS">SOS</option>
                          <option value="SRD">SRD</option>
                          <option value="STD">STD</option>
                          <option value="SZL">SZL</option>
                          <option value="THB">THB</option>
                          <option value="TJS">TJS</option>
                          <option value="TOP">TOP</option>
                          <option value="TRY">TRY</option>
                          <option value="TTD">TTD</option>
                          <option value="TWD">TWD</option>
                          <option value="TZS">TZS</option>
                          <option value="UAH">UAH</option>
                          <option value="UGX">UGX</option>
                          <option value="UYU">UYU</option>
                          <option value="UZS">UZS</option>
                          <option value="VND">VND</option>
                          <option value="VUV">VUV</option>
                          <option value="WST">WST</option>
                          <option value="XAF">XAF</option>
                          <option value="XCD">XCD</option>
                          <option value="XOF">XOF</option>
                          <option value="XPF">XPF</option>
                          <option value="YER">YER</option>
                          <option value="ZAR">ZAR</option>
                          <option value="ZMW">ZMW</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <div class="mb-2">
                  <a class="d-inline-block" href="javascript:;" data-toggle="modal" data-target="#productsAdvancedFeaturesModal">
                    <i class="tio-star tio-lg text-warning mr-1"></i> Set "Compare to" price
                  </a>
                </div>

                <a class="d-inline-block" href="javascript:;" data-toggle="modal" data-target="#productsAdvancedFeaturesModal">
                  <i class="tio-star tio-lg text-warning mr-1"></i> Bulk discount pricing
                </a>

                <hr class="my-4">

                <!-- Toggle Switch -->
                <label class="row toggle-switch" for="availabilitySwitch1">
                  <span class="col-8 col-sm-9 toggle-switch-content">
                    <span class="text-dark">Availability <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Product availability switch toggler."></i></span>
                  </span>
                  <span class="col-4 col-sm-3">
                    <input type="checkbox" class="toggle-switch-input" id="availabilitySwitch1" checked="">
                    <span class="toggle-switch-label ml-auto">
                      <span class="toggle-switch-indicator"></span>
                    </span>
                  </span>
                </label>
                <!-- End Toggle Switch -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Organization</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Form Group -->
                <div class="form-group">
                  <label for="vendorLabel" class="input-label">Vendor</label>

                  <input type="text" class="form-control" name="vendor" id="vendorLabel" placeholder="eg. Nike" aria-label="eg. Nike" value="Adidas">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="form-group">
                  <label for="categoryLabel" class="input-label">Category</label>

                  <!-- Select -->
                  <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="categoryLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Select category"
                          }'>
                    <option label="empty"></option>
                    <option value="Clothing" selected="">Clothing</option>
                    <option value="Shoes">Shoes</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Others">Others</option>
                  </select>
                  <!-- End Select -->
                </div>
                <!-- Form Group -->

                <!-- Form Group -->
                <div class="form-group">
                  <label for="collectionsLabel" class="input-label">Collections</label>

                  <!-- Select -->
                  <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="collectionsLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Select collections"
                          }'>
                    <option label="empty"></option>
                    <option value="Winter">Winter</option>
                    <option value="Spring">Spring</option>
                    <option value="Summer" selected="">Summer</option>
                    <option value="Autumn">Autumn</option>
                  </select>
                  <!-- End Select -->

                  <span class="form-text">Add this product to a collection so it’s easy to find in your store.</span>
                </div>
                <!-- Form Group -->

                <label for="tagsLabel" class="input-label">Tags</label>
  
                <input type="text" class="js-tagify tagify-form-control form-control" name="tagsName" id="tagsLabel" placeholder="Enter tags here" aria-label="Enter tags here" value="white, black">
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Row -->

        <div class="position-fixed bottom-0 content-centered-x w-100 z-index-99 mb-3" style="max-width: 40rem;">
          <!-- Card -->
          <div class="card card-sm bg-dark border-dark mx-2">
            <div class="card-body">
              <div class="row justify-content-center justify-content-sm-between">
                <div class="col">
                  <button type="button" class="btn btn-ghost-danger">Delete</button>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-ghost-light mr-2">Discard</button>
                  <button type="button" class="btn btn-primary">Save</button>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>
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

    <!-- Add Image from URL Modal -->
    <div class="modal fade" id="addImageFromURLModal" tabindex="-1" role="dialog" aria-labelledby="addImageFromURLModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="addImageFromURLModalTitle" class="modal-title">Add image from URL</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <label for="pasteImageURLNameLabel" class="input-label">Paste image URL</label>
            <input type="text" class="form-control" name="projectName" id="pasteImageURLNameLabel" placeholder="https://" aria-label="https://">
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Add media</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Add Image from URL Modal -->

    <!-- Embed Video Modal -->
    <div class="modal fade" id="embedVideoModal" tabindex="-1" role="dialog" aria-labelledby="embedVideoModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="embedVideoModalTitle" class="modal-title">Embed video</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <label for="pasteVideoURLNameLabel" class="input-label">Paste video URL</label>
            <input type="text" class="form-control" name="projectName" id="pasteVideoURLNameLabel" placeholder="https://" aria-label="https://">
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Add media</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    -</div>
    <!-- End Embed Video Modal -->

    <!-- Products Advanced Features Modal -->
    <div class="modal fade" id="productsAdvancedFeaturesModal" tabindex="-1" role="dialog" aria-hidden="true">
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
          <div class="modal-body">
            <div class="text-center mb-7">
              <h4 class="h1">Advanced features</h4>
              <p>"Compare to" Price, Bulk Discount Pricing, Inventory Tracking</p>

              <a class="btn btn-primary" href="#">
                <i class="tio-star mr-1"></i> Upgrade to get these features
              </a>
            </div>

            <!-- Media -->
            <div class="d-sm-flex">
              <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="assets\svg\illustrations\choice.svg" alt="Image Description">

              <div class="media-body">
                <h4>"Compare to" price</h4>
                <p>Use this feature when you want to put a product on sale or show savings off suggested retail pricing.</p>
              </div>
            </div>
            <!-- End Media -->

            <hr class="my-4">

            <!-- Media -->
            <div class="d-sm-flex">
              <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="assets\svg\illustrations\presenting.svg" alt="Image Description">

              <div class="media-body">
                <h4>Bulk discount pricing</h4>
                <p>Encourage higher purchase quantities with volume discounts.</p>
              </div>
            </div>
            <!-- End Media -->

            <hr class="my-4">

            <!-- Media -->
            <div class="d-sm-flex">
              <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="assets\svg\illustrations\book.svg" alt="Image Description">

              <div class="media-body">
                <h4>Inventory tracking</h4>
                <p>Automatically keep track of product availability and receive notifications when inventory levels get low.</p>
              </div>
            </div>
            <!-- End Media -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Close</button>
            <button type="button" class="btn btn-primary">Upgrade now</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    -</div>
    <!-- End Products Advanced Features Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->


    <!-- JS Implementing Plugins -->
    <script src="assets\js\vendor.min.js"></script>
    
    

    <!-- JS Front -->
    <script src="assets\js\theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
              .on('shown.bs.popover', function () {
                $('.popover').last().addClass('popover-dark')
              });

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
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
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        
        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        var quill = $.HSCore.components.HSQuill.init('.js-quill');

        
        // INITIALIZATION OF TAGIFY
        // =======================================================
        $('.js-tagify').each(function () {
          var tagify = $.HSCore.components.HSTagify.init($(this));
        });

        
        // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
        // =======================================================
        $('.js-dropzone').each(function () {
          var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
        });

        
        // INITIALIZATION OF FANCYBOX
        // =======================================================
        $('.js-fancybox').each(function() {
          var fancybox = $.HSCore.components.HSFancyBox.init($(this));
        })

        
        // INITIALIZATION OF DATATABLES
        // =======================================================
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          }
        });

        
        // INITIALIZATION OF QUANTITY COUNTER
        // =======================================================
        $('.js-quantity-counter').each(function () {
          var quantityCounter = new HSQuantityCounter($(this)).init();
        });

        
        // INITIALIZATION OF ADD INPUT FILED
        // =======================================================
        $('.js-add-field').each(function () {
          new HSAddField($(this), {
            addedField: function() {
              $('.js-add-field .js-quantity-counter-dynamic').each(function () {
                var quantityCounter = new HSQuantityCounter($(this)).init();
              });
            }
          }).init();
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>
</html>
