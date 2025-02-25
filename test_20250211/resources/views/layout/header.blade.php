
   <!--Navbar -->
   <nav class="navbar navbar-expand-lg otherpage-top navbar-custom mb-3">
        <div class="container position-relative">
            <!-- 手機板 Logo -->
            <h1 class="d-lg-none d-inline-block col-6">
                <span class="d-none">喵嚕喵嚕</span>
                <a class="d-inline-block" href="/user/merchandise/index" title="回首頁">
                    <img src="{{asset('/images/hlogo.svg')}}" alt="喵嚕商標">
                </a>
            </h1>
    
            <!-- 手機板漢堡選單 -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!--  讓導覽列左右對齊，Logo 置中  -->
            <div class="collapse navbar-collapse w-100 d-flex justify-content-between align-items-center" id="navbarSupportedContent">
                <!-- 左側選單 -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active nav-active" href="/user/merchandise/index#about">關於喵嚕</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#more-news" role="button" data-bs-toggle="dropdown">
                            飼養須知
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#more-news">飼養方式</a></li>
                            <li><a class="dropdown-item" href="#more-news">家長分享</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/user/merchandise/mainecoon" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    喵咪介紹
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="/user/merchandise/mainecoon">喵嚕成貓介紹</a></li>
                        <li><a class="dropdown-item" href="#">新生小貓找家</a></li>
                    </ul>
                    </li>
                </ul>
    
                <!-- Logo 置中 -->
                <div class="position-absolute start-50 translate-middle-x">
                    <a class="d-inline-block" href="/user/merchandise/index" title="回首頁">
                        <img src="{{asset('/images/hlogo.svg')}}" alt="喵嚕商標">
                    </a>
                </div>
    
                <!-- 右側選單 -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active nav-active" href="/user/merchandise/index#contact">聯絡喵嚕</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-active" href="#more-news">其他品牌</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-active" href="/user/auth/signin">
                            <span class="icon-user"></span>會員登入
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- js -->

