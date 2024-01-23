<?php
require_once('system/db.php');
$data = new Database();
$sp = new Product();
$loai = new Category();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Home - Sweet Tea</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Serif&amp;display=swap" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/Calender-Button.css" />
  <link rel="stylesheet" href="assets/css/Search-Input-responsive.css" />
  <link rel="stylesheet" href="assets/css/Sidebar-navbar.css" />
  <link rel="stylesheet" href="assets/css/Sidebar.css" />
  <link rel="stylesheet" href="assets/css/toggler.css" />
  <link rel="stylesheet" href="assets/css/spacing.css" />
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/product-card.css">
  <link rel="stylesheet" href="assets/css/basic.css">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script shttpsrc="://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/03dcdfffe5.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      AOS.init();
    });
  </script>
</head>

<body style="background: #fee4d2">
  <nav class="navbar navbar-expand-md navbar-shrink navbar-light fixed-top" id="mainNav" style="height: 100px; width: 100%; background: transparent; border: 0px;">
    <div class="container">
      <div class="img-logo">
        <a href="index.php">
          <img class="rounded-circle" style="
              background: url('assets/img/banner.png');
              width: 100px;
              height: 100px;
              " src="assets/img/logo.png" width="303" height="284" />
        </a>
      </div>
      <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
      </button>
      <div class="toggler-menu-hid">
        <div class="collapse navbar-collapse d-flex" id="navcol-1">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item" style="width: 100px; height: 50px">
              <a class="nav-link" href="index.php" style="
                    font-size: 21px;
                    color: #54575c;
                    padding-right: 5px;
                    padding-left: 5px;
                  ">Home</a>
            </li>
            <li class="nav-item" style="width: 100px; height: 50px">
              <a class="nav-link" href="shop.php" style="
                    font-size: 21px;
                    color: #54575c;
                    padding-right: 5px;
                    padding-left: 5px;
                  ">Shop</a>
            </li>
            <li class="nav-item" style="width: 100px; height: 50px">
              <a class="nav-link" href="projects.php" style="
                    font-size: 21px;
                    color: #54575c;
                    padding-right: 5px;
                    padding-left: 5px;
                  ">About</a>
            </li>
            <li class="nav-item" style="width: 100px; height: 50px">
              <a class="nav-link" href="pricing.php" style="
                    font-size: 21px;
                    color: #ec7755;
                    padding-right: 5px;
                    padding-left: 5px;
                  ">Pages</a>
            </li>
          </ul>
          <ul class="d-xl-flex align-items-xl-center">
            <li class="d-flex" style="letter-spacing: 0px; width: 62px; height: 68px">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search" style="
                    font-size: 30px;
                    color: #2c2d2f;
                    margin-top: 24px;
                    --bs-body-font-weight: normal;
                    transition: fill 0.1s ease;">
                <path class="bi-nav" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
              </svg>
            </li>
            <li class="d-flex" style="width: 62px; height: 68px">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cart3" style="
                    font-size: 30px;
                    color: #2c2d2f;
                    margin-top: 24px;
                    --bs-body-font-weight: normal;
                    transition: fill 0.1s ease;">
                <path class="bi-nav" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
              </svg>
            </li>
            <?php
            if (!empty($_SESSION["username"])) {
            ?>
              <li class="d-flex position-rev" style="width: 62px; height: 68px" id="person-gear">
                <svg class="bi bi-person-gear" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="
                    font-size: 30px;
                    color: #2c2d2f;
                    margin-top: 24px;
                    --bs-body-font-weight: normal;
                    transition: fill 0.1s ease;">>
                  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"></path>
                </svg>
              </li>
              <div id="NavbarDropdown" class="display-none" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="media align-items-center">
                    <div class="avatar avatar-sm avatar-circle mr-2">
                      <img class="avatar-img" src="./assets/img/abc.jpg" alt="Image Description">
                    </div>
                    <?php $select = $data->select("select * from users where username = '" . $_SESSION['username'] . "'");
                    if ($select->num_rows > 0) {
                      $result = $select->fetch_assoc()  ?>
                      <div class="media-body">
                        <span class="card-title h5"><?php echo $result['hoten'] ?></span>
                        <span class="card-text"><?php echo $result['email'] ?> </span>
                      </div>
                    <?php


                    } ?>
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
                <a class="dropdown-item" href="login.php">
                  <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                </a>
              </div>
            <?php
            } else {
            ?>

              <li class="d-flex" style="width: 62px; height: 68px" id="showmodal">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person" style="
                  font-size: 30px;
                  color: #2c2d2f;
                  margin-top: 24px;
                  --bs-body-font-weight: normal;
                  transition: fill 0.1s ease;">
                  <path class="bi-nav" d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                </svg>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>