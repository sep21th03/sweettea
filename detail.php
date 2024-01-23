<?php
require 'inc/header.php';
$sp = new Product();
if (isset($_GET['productID'])) {
    $productID = $_GET['productID'];
}
?>


<section class="product-detail mt-100 mb-5">
    <div class="container">
        <?php
        $show_product = $sp->getproduct($productID);
        if ($show_product) {
            while ($result = $show_product->fetch_assoc()) {
        ?>
                <div class="d-flex" style="
    justify-content: space-evenly;">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-card">
                            <div class="showcase-box">
                                <img src="<?php echo $result['img']?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="cart-detail">
                            <div class="content-block">
                                <h5 class="title">Product Detail</h5>
                                <div class="detail-row">
                                    <p>Giá</p>
                                    <span><?php echo $result['price'] ?></span>
                                </div>
                                <div class="detail-row">
                                    <p>Shipping Fee</p>
                                    <div class="quantity quantity-wrap">
                                        <input class="decrement" type="button" value="-" onclick="decrementQuantity()">
                                        <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number" id="quantityInput">
                                        <input class="increment" type="button" value="+" onclick="incrementQuantity()">
                                    </div>
                                </div>
                                <div class="detail-row">
                                    <p>Size</p>
                                    <div class="d-flex">
                                        <button class="size" aria-label="M">
                                            M
                                        </button>
                                        <button class="size" aria-label="L">
                                            L
                                        </button>
                                    </div>
                                </div>
                                <div class="detail-row">
                                    <p>Discount</p>
                                    <span>$20.00</span>
                                </div>
                            </div>
                            <div class="content-block">
                                <div class="d-flex justify-content">
                                    <a href="checkout.html" class="cus-btn dark">Thêm vào giỏ</a>
                                    <a href="checkout.html" class="cus-btn dark">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</section>

<script>
    const sizeBtn = document.querySelectorAll('.size');
    sizeBtn.forEach((btn) => {
        btn.addEventListener('click', () => {
            if (btn.classList.contains('T_6srb')) {
                btn.classList.remove('T_6srb');
            } else {
                sizeBtn.forEach((btn) => {
                    btn.classList.remove('T_6srb');
                })
                btn.classList.add('T_6srb');
            }
        })
    })


    // Hàm giảm giá trị
    function decrementQuantity() {
        var quantityInput = document.getElementById('quantityInput');
        var currentValue = parseInt(quantityInput.value, 10);

        // Giảm giá trị không dưới 1
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    }

    // Hàm tăng giá trị
    function incrementQuantity() {
        var quantityInput = document.getElementById('quantityInput');
        var currentValue = parseInt(quantityInput.value, 10);

        // Tăng giá trị không vượt quá giới hạn nào đó (nếu cần)
        // Ở đây, tôi để giới hạn là 99
        if (currentValue < 99) {
            quantityInput.value = currentValue + 1;
        }
    }
</script>
<?php
require 'inc/footer.php';
?>