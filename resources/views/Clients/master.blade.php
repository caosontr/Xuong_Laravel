<!DOCTYPE html>
<html lang="en">

<head>
  <title>Động Phím Cơ - Laravel</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="ecommerce,fashion,store">
  <meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" href="images/keycap-logo-bg.jpg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="homepage">
  
  <div class="preloader text-white fs-6 text-uppercase overflow-hidden"></div>

  <div class="search-popup">
    <div class="search-popup-container">

      <form role="search" method="get" class="form-group" action="">
        <input type="search" id="search-form" class="form-control border-0 border-bottom"
          placeholder="Type and press enter" value="" name="s" />
        <button type="submit" class="search-submit border-0 position-absolute bg-white"
          style="top: 15px;right: 15px;"><svg class="search" width="24" height="24">
            <use xlink:href="#search"></use>
          </svg></button>
      </form>

      <h5 class="cat-list-title">Browse Categories</h5>

      <ul class="cat-list">
        <li class="cat-list-item">
          <a href="#" title="Jackets">Jackets</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="T-shirts">T-shirts</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Handbags">Handbags</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Accessories">Accessories</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Cosmetics">Cosmetics</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Dresses">Dresses</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Jumpsuits">Jumpsuits</a>
        </li>
      </ul>

    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Growers cider</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Fresh grapes</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Heinz tomato ketchup</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to Checkout</button>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
      <!-- Logo -->
      <a class="navbar-brand" href="index.html">
        <img width="80" height="70" src="images/keycap-logo.png" alt="Logo">
      </a>
  
      <!-- Menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav mx-auto gap-3">
            <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Sản Phẩm</a>
              <ul class="dropdown-menu">
                <li><a href="index.html" class="dropdown-item">Danh mục 1</a></li>
                <li><a href="index.html" class="dropdown-item">Danh mục 2</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link active" href="/">Tin tức</a></li>
            <li class="nav-item"><a class="nav-link active" href="/">Khuyến Mãi</a></li>
            <li class="nav-item"><a class="nav-link active" href="/">Liên hệ</a></li>
          </ul>
        </div>
      </div>
  
      <!-- Tài khoản & Giỏ hàng -->
      <div class="d-flex align-items-center gap-3">
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Tài Khoản</a>
          <ul class="dropdown-menu">
            <li><a href="index.html" class="dropdown-item">Đăng Ký</a></li>
            <li><a href="index.html" class="dropdown-item">Đăng Nhập</a></li>
          </ul>
        </div>
  
        <a href="#" class="text-uppercase" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart">
          Cart <span class="cart-count">(0)</span>
        </a>
      </div>
    </div>
  </nav>
  
  @yield('main-content')

  <!-- Footer -->
  <footer id="footer" class="mt-5">
    
    <div class="border-top py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex flex-wrap">
            <div class="shipping">
              <span>We ship with:</span>
              <img src="images/arct-icon.png" alt="icon">
              <img src="images/dhl-logo.png" alt="icon">
            </div>
            <div class="payment-option">
              <span>Payment Option:</span>
              <img src="images/visa-card.png" alt="card">
              <img src="images/paypal-card.png" alt="card">
              <img src="images/master-card.png" alt="card">
            </div>
          </div>
          <div class="col-md-6 text-end">
            <p>© Copyright 2025. FPT Polytechnic. Design by <a href="https://www.facebook.com/kaoxown"
                target="_blank">Trần Cao Sơn</a> 
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/SmoothScroll.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/script.min.js"></script>
</body>

</html>