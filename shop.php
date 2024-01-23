<?php
require 'inc/header.php';
?>

<section style="background: url(&quot;assets/img/banner.png&quot;) no-repeat;height: 300px;background-size: contain;">
    <div class="container cont-c" style="padding-top: 100px;">
        <h1 style="font-weight: bold;font-family: 'Roboto Serif', serif;font-size: 80px;">Shop</h1>
        <img src="/assets/img/shop.png" alt="" style="height: 350px;
    filter: drop-shadow(20px 7px 18px black);
    position: absolute;
    top: 90px;
    right: 50px;">
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar" style="background: #FFF2E9;box-shadow: 42px 42px 24px rgba(0, 0, 0, 0.1), 24px 24px 20px rgba(0, 0, 0, 0.03), 11px 11px 15px 0px rgba(0, 0, 0, 0.04), 0px 0px 0px rgba(0, 0, 0, 0.04);padding: 20px;margin-left: -12px;border-top: 3px solid #EC7755 ;">
                    <div class="float-start float-md-end mt-5 mt-md-0 search-area" style="margin-bottom: 32px;"><i class="fas fa-search float-start search-icon"></i><input class="float-start float-sm-end custom-search-input" type="search" placeholder="Search"></div>
                    <h3 class="text-start" style="font-weight: bold;margin-bottom: 32px;padding-left: 27px;">Catagories</h3>
                    <div>
                        <ul class="text-truncate text-start flex-column justify-content-evenly align-items-start align-content-stretch justify-content-xl-start">
                            <li class="text-truncate text-start" style="margin-bottom: 16px;color: #54575C;font-size: 21px;"><a class="text-center mouse-two " href="shop.php">All Product</a></li>
                            <?php
                            $show_category = $loai->show_category();
                            if ($show_category) {
                                $i = 0;
                                while ($row = $show_category->fetch_assoc()) {
                                    $i++;
                            ?>
                                    <li class="text-truncate text-start" style="margin-bottom: 16px;color: #54575C;font-size: 21px;"><a class="text-center mouse-two" href="shop.php?categoryID=<?php echo $row['categoryID'] ?>"><?php echo $row['categoryName'] ?></a></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <?php
                    $id = isset($_GET['categoryID']) ? $_GET['categoryID'] : '';
                    $getproductbyct = $sp->getproductbyct($id);
                    $show_product = $sp->show_product();
                    if ($getproductbyct && $getproductbyct->num_rows > 0) {
                        while ($row = $getproductbyct->fetch_assoc()) {
                    ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-card">
                                    <div class="showcase-box">
                                        <img src="<?php echo $row['img'] ?>" alt="">
                                        <div class="overlay">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <!-- <a href="#"> -->
                                                <span class="price"><?php echo $row['price'] ?> VND</span>
                                                <!-- </a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="title"><?php echo $row['productName'] ?></a>
                                    <a href="detail.php?productID=<?php echo $row['productID'] ?>" class="cus-btn dark">Buy Now</a>
                                </div>
                            </div>

                            <?php
                        }
                    } else {

                        if ($show_product) {

                            $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                            $limit = 6;
                            $start = ($page <= 1) ? 0 : ($page - 1) * $limit;
                            $query = "select * from product limit $start,$limit";
                            $result = $db->query($query);
                            while ($row = $result->fetch_assoc()) {

                            ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="<?php echo $row['img'] ?>" alt="">
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <!-- <a href="#"> -->
                                                    <span class="price"><?php echo $row['price'] ?> VND</span>
                                                    <!-- </a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="title"><?php echo $row['productName'] ?></a>
                                        <a href="detail.php?productID=<?php echo $row['productID'] ?>" class="cus-btn dark">Buy Now</a>
                                    </div>
                                </div>
                    <?php
                            }

                            $total_products = $show_product->num_rows;
                            if ($total_products > $limit) {
                                $total_pages = ceil($total_products / $limit);
                                echo '<div class="text-center">';
                                echo '<div class="pagination-wrape">';
                                echo '<ul class="pagination">';
                                if ($page == 1) {
                                    echo '<li class="page-item"><a href="#" class="page-link arrow" aria-label="next"><i class="fa-solid fa-chevron-left"></i></i></a></li> ';
                                }
                                elseif ($page > 1) {
                                    echo '<li class="page-item"><a href="shop.php?page='  . ($page - 1) . '" class="page-link arrow" aria-label="next"><i class="fa-solid fa-chevron-left"></i></i></a></li> ';
                                }
                                for ($i = 1; $i <= $total_pages; ++$i) {
                                    echo '<li class="page-item">';
                                    echo '<a href="shop.php?page=' . $i . '"';
                                    if ($i == $page) echo 'class="page-link page-active"';
                                    else echo 'class="page-link"';
                                    echo '>' . $i . '</a>';
                                    echo '</li>';
                                }
                                if ($page == $total_pages) {
                                    echo '<li class="page-item"><a href="#" class="page-link arrow" aria-label="next"><i class="fa-solid fa-chevron-right"></i></i></a></li> ';
                                }
                                elseif ($page < $total_pages) {
                                    echo '<li class="page-item"><a href="shop.php?page=' . ($page + 1) . '" class="page-link arrow" aria-label="next"><i class="fa-solid fa-chevron-right"></i></i></a></li> ';
                                }
                                echo '</ul>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="category mt-100 pb-48">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="category-box">
                    <img src="assets/img/c-1.png" alt="" />
                    <div class="content-box">
                        <div class="discount">
                            <h3>20%</h3>
                            <span>OFF</span>
                        </div>
                        <h4>Trà Sữa Than Tre</h4>
                        <a href="#" class="cus-btn dark">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="category-box">
                    <img src="assets/img/c-2.png" alt="" />
                    <div class="content-box">
                        <div class="discount">
                            <h3>20%</h3>
                            <span>OFF</span>
                        </div>
                        <h4>Bubble-Tea</h4>
                        <a href="#" class="cus-btn dark">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require 'inc/footer.php';
?>