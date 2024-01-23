<footer class="footer">
  <div class="container">
    <div class="main">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-9 col-11">
          <a class="logo" href="index.php"><img alt="" src="/assets/img/abc.jpg"></a>
          <p class="detail">Welcome to Cobbler, your go-to destination for exquisite footwear & exceptional craftsmanship. With a passion for quality and timeless style, we pride ourselves with this.</p>
        </div>
        <div class="col-lg-2 offset-lg-1">
          <h5 class="title">Categories</h5>
          <ul class="list-unstyled links">
            <li><a href="shop.html">Food & Drinks</a></li>
            <li><a href="shop.html">Vegetables</a></li>
            <li><a href="shop.html">Fruits</a></li>
            <li><a href="shop.html">Dairy</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5 class="title">Essential Links</h5>
          <ul class="list-unstyled links">
            <li><a href="index.html">Home</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="product-detail.html">Product Detail</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-9 col-10">
          <h5 class="title">Subscribe to Our Newsletter</h5>
          <form action="index.html">
            <div class="input-group mb-16">
              <input type="email" class="form-control" id="email" name="email" required placeholder="Your Email">
            </div>
            <button type="submit" class="cus-btn dark">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
    <div class="bottom-content">
      <h5 class="title">Contact Info</h5>
      <div class="contact-row">
        <ul class="contact-list list-unstyled">
          <li><a href="tel:123456789"><i class="fa-solid fa-phone"></i></i> +21092003</a></li>
          <li><a href="mailto:info@gmail.com"><i class="fa-solid fa-envelope"></i></i></i> sep21@th.com</a></li>
          <li><span><i class="fa-solid fa-location-dot"></i></i> Z115 Thai Nguyen.</span></li>
        </ul>
        <ul class="footer-social-icon list-unstyled">
          <li><a href="https://www.facebook.com/profile.php?id=61555101792970"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
          <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="text-center">
      <p class="copyright">©2024 All rights are reserved by Inifnity</p>
    </div>
  </div>
</footer>
<!-- Login -->
<div class="modal-container">
  <div class="wrapper login-form" id="login" style="display: none;">
    <i class="fa-solid fa-xmark" id="close_login"></i>
    <div class="logo">
      <img src="assets/img/abc.jpg" alt="" />
    </div>
    <div class="text-center mt-4 name">Sweet Tea</div>
    <form class="p-3 mt-3">
      <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="userName" id="userName" placeholder="Username" />
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password" id="pwd" placeholder="Password" />
      </div>
      <button class="btn mt-3" id="loginForm" type="button">Login</button>

    </form>
    <div class="text-center fs-6">
      <a href="#">Forget password?</a> or <a href="#" id="show_reg">Sign up</a>
    </div>
  </div>
  <!--Sign up -->
  <div class="wrapper signup_form" id="reg" style="display: none;">
    <i class="fa-solid fa-xmark" id="close_signup"></i>
    <div class="logo">
      <img src="assets/img/abc.jpg" alt="" />
    </div>
    <div class="text-center mt-4 name">Sweet Tea</div>
    <form class="p-3 mt-3">
      <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="username2" id="userName2" placeholder="Username" required="" />
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password2" id="pwd2" placeholder="Create password" required="" />
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password3" id="pwd3" placeholder="Confirm Password" required="" />
      </div>
      <button class="btn mt-3" id="signupForm" type="button">Sign up</button>
    </form>
    <div class="text-center fs-6">
      <span style="font-size: 12.8px">
        Do you already have an account?</span>
      or <a href="#" id="show_login">Login</a>
    </div>
  </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">
  <i class="fa-solid fa-chevron-up"></i>
</button>

<script>
  // Get the button
  let mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<script>
  document.addEventListener("DOMContentLoaded", function(){
    const mainnav = document.getElementById('mainNav')
    window.onscroll = function(){
      if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
        mainnav.classList.add('header-scrolled')
      }else{
        mainnav.classList.remove('header-scrolled')
      }
    }
  })
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/bold-and-bright.js"></script>
<script src="assets/js/toggler.js"></script>
<script src="assets/js/login.js"></script>
<script src="assets/js/api.js"></script>
<!-- <script
      src="https://kit.fontawesome.com/03dcdfffe5.js"
      crossorigin="anonymous"
    ></script> -->
</body>

</html>