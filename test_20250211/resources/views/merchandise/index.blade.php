<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.main')
<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

<body>

    <!--Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
      <div class="container">
          <!-- 手機板 Logo -->
          <h1 class="d-lg-none d-inline-block col-6">
              <span class="d-none">喵嚕喵嚕</span>
              <a class="d-inline-block" href="index.html" title="回首頁">
              <img src="{{asset('/images/hlogo.svg')}}" alt="喵嚕商標">
              </a>
          </h1>
  
          <!-- 手機板漢堡選單 -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav align-items-center position-relative">
                  <li class="nav-item">
                      <a class="nav-link active nav-active" href="#">關於喵嚕</a>
                  </li>
                  <!-- 下拉式選單 -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#"role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          飼養須知
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">飼養方式</a></li>
                          <li><a class="dropdown-item" href="#">家長分享</a></li>
                      </ul>
                  </li>
  
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#"role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          小貓找家
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">浪浪小貓</a></li>
                          <li><a class="dropdown-item" href="#">新生小貓</a></li>
                      </ul>
                  </li>
  
                  <li class="nav-item position-relative d-lg-block d-none">
                      <h1>
                          <span class="opacity-0">喵嚕喵嚕</span>
                          <div class="position-absolute top-50 start-0">
                              <a class="d-inline-block" href="index.html" title="回首頁">
                                  <img src="{{asset('/images/圓logo.svg')}}" alt="喵嚕商標">
                              </a>
                          </div>
                      </h1>
                  </li>
  
                  <li class="nav-item">
                      <a class="nav-link active nav-active" href="#">聯絡喵嚕</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active nav-active" href="#">其他品牌</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active nav-active" href="#"><span class="icon-user"></span></a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  
    <!-- 輪播 Banner -->
    <header>
        <div id="top-banner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/images/banner1.jpg')}}" class="d-block w-100" alt="banner1">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/banner4.jpg')}}" class="d-block w-100" alt="banner2">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/banner4.jpg')}}" class="d-block w-100" alt="banner3">
                </div>
            </div>
    
            <!-- 左右切換按鈕 -->
            <button class="carousel-control-prev" type="button" data-bs-target="#top-banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">上一張</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#top-banner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">下一張</span>
            </button>
        </div>
    </header>

    <!-- js -->
  <script src="{{asset('assets/css/bootstrap-5.3.3/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>