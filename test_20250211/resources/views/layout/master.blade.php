<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>@yield('title')</title>
        <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"defer></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}" defer></script>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fonts/icons-1.11.3/font/bootstrap-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bostyle.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/bomedia.css')}}">  
    </head> 
    <body> 
    <div class="bg-body-tertiary py-1 border-bottom broder-3 border-brown">
    <div class="container">
      <!-- 聯絡資訊、語系、會員、購物車-->
      <div class="d-flex align-items-center justify-content-between">
        <!--聯絡資訊 -->
        <div>
          <ul class="list-unstyled d-flex mb-0">
            <!-- 信箱 -->
            <li class="me-3 ">
              <a href="mailto:service@gmail.com" title="連絡信箱service@gmail.com">
                <i class="bi bi-envelope text-dark"></i>
                <span class="text-dark  d-md-inline-block d-none">service@gmail.com</span>
              </a>
            </li>
            <!-- 電話 -->
            <li>
              <a href="tel:+8860942300579" title="客服專線:+886 0942-300-579">
                <i class="bi bi-phone text-dark"></i>
                <span class="text-dark  d-md-inline-block d-none">+886 0942-300-579</span>
              </a>
            </li>
          </ul>
        </div>
        <!--語系、會員、購物車-->
        <div class="d-flex me-sm-0 me-3">
          <!-- 語系 -->
          <div class="dropdown lang-menu">
            <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-globe"></i>
              <span class="d-none">語系轉換按鈕</span>
            </button>
            <ul class="dropdown-menu text-center">
              <li><a class="border-bottom" href="#" title="繁體中文">繁</a></li>
              <li><a class="border-bottom" href="#" title="簡體中文">簡</a></li>
              <li><a class="border-bottom" href="#" title="英語">英</a></li>
            </ul>
          </div>
          <span class="px-2">|</span>
          <!-- 會員 -->
          <div>
            <a data-bs-toggle="modal" data-bs-target="#login" href="javascript:;" title="點擊登入">
              <i class="bi bi-person text-dark"></i>
              <span class="text-dark d-md-inline-block d-none">登入</span>
            </a>
          </div>
          <span class="px-2">|</span>
          <!-- 購物車 -->
          <div class="cart-btn">
            <a href="cart-list.html" title="前往 我的購物車" class="position-relative">
              <i class="bi bi-cart3 text-dark "></i>
              <span class="text-dark bg-primary-subtle rounded-pill p-1 fs-10 fw-bolder position-absolute">+99</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 主選單 -->
  <nav class="navbar navbar-expand-xl bg-body-tertiary shadow">
    <div class="container">
      <h1 class="mb-0 d-inline-block">
        <a class="navbar-brand col-8 me-0" href="index.html" title="回首頁">
          <!-- <img class="d-md-inline-block d-none" src="" alt="MAX WATCH"> -->
          <span class="d-md-none d-inline-block">moremorecat</span>
        </a>
      </h1>
      <!-- 平板、手機 -->
      <div class="search btn d-lg-none d-inline-block  ms-auto">
        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#search-area" aria-expanded="false"
          aria-controls="search-area">
          <i class="bi bi-search"></i>
          <span class="d-none">搜尋按鈕</span>
        </button>
      </div>
      <!-- 漢堡 -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="bi bi-list-nested"></i>
      </button>
      <!-- 連結 -->
      <div class="collapse navbar-collapse" id="main-menu">
        <ul class="navbar-nav  mb-2 mb-lg-0  ">
          <li class="nav-item">
            <a class="nav-link " href="index.html#about" title="前往 關於我們">關於我們</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#service" title="前往 服務項目">服務項目</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.html" title="前往 各類商品">各類商品</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#new-product" title="前往 最新商品">最新商品</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sale.html" title="前往 促銷活動">促銷活動</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#info" title="前往 相關資訊">相關資訊</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#news-letter" title="前往 訂閱">訂閱</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#contact" title="前往 聯絡我們">聯絡我們</a>
          </li>
          <!-- 電腦版 -->
          <li class="nav-item d-lg-block d-none">
            <div class="search-btn">
              <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#search-area"
                aria-expanded="false" aria-controls="search-area">
                <i class="bi bi-search"></i>
                <span class="d-none">搜尋按鈕</span>
              </button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- 搜尋表單 -->
  <div class="container col-xl-10">
    <div class="collapse" id="search-area">
      <div class="card card-body border-0 bg-transparent">
        <form action="#" method="get">
          <div class="form-floating">
            <input type="search" class="form-control bg-light border-0" id="for-search" placeholder="請輸入商品名稱">
            <label for="for-search">請輸入商品名稱</label>
          </div>
          <button type="submit" class="d-none">送出</button>
        </form>

      </div>
    </div>
  </div>
  </div>
        <main> 
            @if(session()->has('user_id'))
            <a href="/user/auth/signout">登出</a>
            @else
            <a href="/user/auth/signup">註冊</a> 
            <a href="/user/auth/signin">登入</a>
            @endif
        </main> 
        <div class="container"> 
            @yield('content') 
        </div> 
    <footer class="py-5 bg-gp ">
    <div class="container">
      <!-- 社群、連結、聯絡資訊 -->
      <div class="footer-top">
        <div class="row row-col-1 row-col-md-2 row-cols-xl-3 g-4">
          <!-- 社群 -->
          <div class="col">
            <!-- logo -->
            <div class="text-lg-center mb-3">
              <a class="col-12" href="index.html" title="首頁">
                <img src="{{asset('/images/hlogo.svg')}}" alt="MAX WATCH商標">
              </a>
            </div>
            <!-- 社群logo -->
            <ul class="list-unstyled d-flex align-items-center justify-content-lg-center social-icon">
              <li class="me-4 mt-3">
                <a class="text-light display-6" href="#" target="_blank" title="前往MAX WATCH FB專頁">
                  <i class="bi bi-facebook"></i>
                  <span class="d-none">FB專頁</span>
                </a>
              </li>
              <li class="me-4 mt-3">
                <a class="text-light display-6" href="#" target="_blank" title="前往MAX WATCH IG專頁">
                  <i class="bi bi-instagram"></i>
                  <span class="d-none">IG專頁</span>
                </a>
              </li>
              <li class="me-4 mt-3">
                <a class="text-light display-6" href="#" target="_blank" title="前往MAX WATCH threads專頁">
                  <i class="bi bi-threads"></i>
                  <span class="d-none">IG專頁</span>
                </a>
              </li>
              <li class="mt-3">
                <a class="text-light display-6" href="#" target="_blank" title="歡迎加MAX WATCH LINE好友">
                  <i class="bi bi-line"></i>
                  <span class="d-none">加LINE好友</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- 連結 -->
          <div class="col">
            <h3 class="h5 border-bottom d-inline-block col-8 pb-3 fw-bolder">連結</h3>
            <!-- hr class=h5 h -->
            <ul class="list-unstyled row row-cols-2 g-3">
              <li class="nav-item">
                <a class="nav-link " href="index.html#about" title="前往 關於我們">關於我們</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#service" title="前往 服務項目">服務項目</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.html" title="前往 各類商品">各類商品</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#new-product" title="前往 最新商品">最新商品</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sale.html" title="前往 促銷活動">促銷活動</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#info" title="前往 相關資訊">相關資訊</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#news-letter" title="前往 訂閱">訂閱</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#contact" title="前往 聯絡我們">聯絡我們</a>
              </li>
            </ul>
          </div>
          <!-- 聯絡資訊 -->
          <div class="col">
            <h3 class="h5 border-bottom d-inline-block col-8 pb-3 fw-bolder">聯絡資訊</h3>
            <ul class="list-unstyled">
              <li><span>客服專線:</span>+886 0942-300-579</li>
              <li><span>電子信箱:</span>service@gmail.com</li>
              <li>
                <span>地址:</span>
                <a class="text-dark" href="https://maps.app.goo.gl/3YHmYz3VusYfgEhk6" title="前往google map[另開新視窗]"
                  target="_blank">高雄市鼓山區華安街49號</a>
              </li>
              <li><span>營業時間:</span>週二-週日 9am 到 9pm</li>
              <li><span>店休時間:</span>週一 及 每月的第三週 週日</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- 版全申告 -->
    <div class="bg-gp py-3 text-center footer-bottom">
      <div class="container">
        <small class="text-light">&copy; 2025 moremorecat
          <!-- <span class="px-2 d-md-inline-block d-none">|</span> -->
          <br class="d-md-none d-block">
        </small>
      </div>
    </div>
    </div>
  </footer>
    </body> 
</html> 
