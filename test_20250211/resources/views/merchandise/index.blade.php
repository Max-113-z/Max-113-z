<!-- 指定繼承 layout.main2 母模板 -->
@extends('layout.main2')
<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

<body>
<!--Navbar -->
    <nav id="top-nav" class="navbar navbar-expand-lg fixed-top box navbar-custom">
    <div class="container align-items-center justify-content-center">
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

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center position-relative">
                <li class="nav-item">
                    <a class="nav-link active nav-active" href="#about">關於喵嚕</a>
                </li>
                <!-- 下拉式選單 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#more-news"role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        飼養須知
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#more-news">飼養方式</a></li>
                        <li><a class="dropdown-item" href="#">家長分享</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    喵咪介紹
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="/user/merchandise/mainecoon">喵嚕成貓介紹</a></li>
                        <li><a class="dropdown-item" href="#">新生小貓找家</a></li>
                    </ul>
                </li>
                <li class="nav-item position-relative d-lg-block d-none">
                    <h1>
                        <span class="opacity-0">喵嚕喵嚕</span>
                        <div class="position-absolute top-30 start-01">
                            <a class="d-inline-block"  href="/user/merchandise/index" title="回首頁">
                                <img src="{{asset('/images/圓logo.svg')}}" id="desktop-logo" alt="喵嚕商標">
                            </a>
                        </div>
                    </h1>
                    </li>
                <li class="nav-item">
                    <a class="nav-link active nav-active" href="#contact">聯絡喵嚕</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active nav-active" href="#more-news">其他品牌</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active nav-active"  href="/user/auth/signin">
                        <span class="icon-user"></span>會員登入</a>
                        
                </li>
            </ul>
        </div>
    </div>
    </nav>
<!-- 輪播 Banner -->
<header>
    <div id="top-banner" class="carousel slide pb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/images/banner2.jpg')}}" class="d-block w-100" alt="banner1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/images/banner3.jpg')}}" class="d-block w-100" alt="banner2">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/images/banner4.png')}}" class="d-block w-100" alt="banner3">
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
<!--主要內容-->
<main>
    <!--關於喵嚕-->
    <article id="about" class="py-7 pb-5">
            <div class="position-relative">
            <div class="d-flex">
                <!--banner-->
                <div class="position-absolute start-pc-about">
                    <div >
                        <img src="{{asset('/images/about-banner.svg')}}" alt="關於喵嚕banner">
                    </div>
                </div>
                <!--右邊內容-->
                <div class="position-absolute start-pc-word d-flex flex-column align-items-center text-center">
                    <!--logo-->
                    <div class="img-70"><img src="{{asset('/images/圓logo.svg')}}" alt="喵嚕商標">
                    <span class="d-none">關於喵嚕</span>
                    </div>
                    <!--小標題-->
                    <h5 class="py-2 fw-bold text-red fs-2">關於喵嚕</h5>
                    <!--內容-->
                    <div class="fw-bold text-gray fs-8 col-8 ">
                        <h5>喵嚕貓擼貓舍位於高雄市鼓山區</h5>
                        <p class="text-start">擁有國際TICA、WCF協會認證的合法登記貓舍。
                        開放式飼養，是貓舍也是貓咖啡廳。<br>
                        專業培育緬因貓、西伯利亞貓。
                        種公種母皆從國外進口，親自培育長大，並通過四項遺傳病基因檢測，無近親繁殖。<br class="p-3">
                        用心疼愛貓爸媽及貓孩子，提供良好的環境，讓家長有更優質的選擇</p>
                    
                    </div>
                    <!--按鈕-->
                    <a  href="/user/booking/booking" class="btn btn-red px-4" type="submit">預約賞貓</a>
                 

                </div>
            </div>
        </div>
    </article>

    <!--更多資訊-->
    <article id="more-news" class="py-7 pb-5 mt-news more-news">
        <div class="container">
            <h2 class="text-center py-3"><div class="text-title">More News</div></h2>
            <!--標籤按鈕-->
            <ul class="nav nav-tabs justify-content-center align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#service">服務項目</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#new-info">最新資訊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#introduce">環境介紹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#feeding">飼養方式</a>
                </li>
            </ul>
            
            <!-- 內容區塊 -->
             
            <div class="tab-content mt-3">
                <!-- 服務內容 -->
                <div id="service" class="tab-pane fade show active">
                    <div class="d-flex justify-content-center">
                        <!-- 服務1 -->
                        <div class="card p-3 col-4 mx-2" style="width: 14rem;">
                        <div class="text-center fw-bold p-3 fs-5 text-red">幼貓體內外驅蟲</div>
                            <img src="{{asset('/images/service1.svg')}}" class="card-img-top" alt="service">
                            <div class="card-body">
                            <p class="card-text fs-8 text-center col-12 text-gray fw-bold">包含體內、體外驅蟲，依幼貓的健康狀況提供個人化驅蟲建議。</p>
                            </div>
                        </div>
                        <!-- 服務2 -->
                        <div class="card p-3 col-4 mx-2" style="width: 14rem;">
                        <div class="text-center fw-bold p-3 fs-5 text-red">晶片植入、登記</div>
                            <img src="{{asset('/images/service2.svg')}}" class="card-img-top" alt="service">
                            <div class="card-body">
                            <p class="card-text fs-8 text-center col-12 text-gray fw-bold">提供晶片使用方式、法規說明及遺失寵物處理建議。</p>
                            </div>
                        </div>
                        <!-- 服務3 -->
                        <div class="card p-3 col-4 mx-2" style="width: 14rem;">
                        <div class="text-center fw-bold p-3 fs-5 text-red">簽訂買賣契約書</div>
                            <img src="{{asset('/images/service3.svg')}}" class="card-img-top" alt="service">
                            <div class="card-body">
                            <p class="card-text fs-8 text-center col-12 text-gray fw-bold">提供專業見證服務，確保契約簽署過程符合法律要求並具法律效力。
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- 最新資訊 -->
                <div id="new-info" class="tab-pane fade">
                    <div class="d-flex justify-content-center">
                        <!--資訊按鈕1-->
                        <div class="d-flex align-items-center justify-content-center text-center mt-3">
                            <div class="card p-3 col-3 " style="width: 14rem;">
                            <!--資訊圖片-->
                            <div>
                                <img src="{{asset('/images/new1.jpg')}}" alt="" class="">
                            </div>
                            <!--資訊標題-->
                            <div class="text-center py-1 fw-bold fs-7">慶祝聖誕,來店消費送肉泥</div>
                            <!-- 資訊按鈕 -->
                            <div>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#new1">
                                查看詳情
                                </button>
                            </div>
                            </div>
                        </div>
                        <!--資訊按鈕2-->
                        <div class="d-flex align-items-center justify-content-center text-center mt-3">
                            <div class="card p-3 col-3 " style="width: 14rem;">
                            <!--資訊圖片-->
                            <div>
                                <img src="{{asset('/images/new1.jpg')}}" alt="" class="">
                            </div>
                            <!--資訊標題-->
                            <div class="text-center py-1 fw-bold fs-7">慶祝聖誕,來店消費送肉泥</div>
                            <!-- 資訊按鈕 -->
                            <div>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#new1">
                                查看詳情
                                </button>
                            </div>
                            </div>
                        </div>
                        <!--資訊按鈕3-->
                        <div class="d-flex align-items-center justify-content-center text-center mt-3">
                            <div class="card p-3 col-3 " style="width: 14rem;">
                            <!--資訊圖片-->
                            <div>
                                <img src="{{asset('/images/new1.jpg')}}" alt="" class="">
                            </div>
                            <!--資訊標題-->
                            <div class="text-center py-1 fw-bold fs-7">慶祝聖誕,來店消費送肉泥</div>
                            <!-- 資訊按鈕 -->
                            <div>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#new1">
                                查看詳情
                                </button>
                            </div>
                            </div>
                        </div>
                        <!--資訊按鈕4-->
                        <div class="d-flex align-items-center justify-content-center text-center mt-3">
                            <div class="card p-3 col-3 " style="width: 14rem;">
                            <!--資訊圖片-->
                            <div>
                                <img src="{{asset('/images/new1.jpg')}}" alt="" class="">
                            </div>
                            <!--資訊標題-->
                            <div class="text-center py-1 fw-bold fs-7">慶祝聖誕,來店消費送肉泥</div>
                            <!-- 資訊按鈕 -->
                            <div>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#new1">
                                查看詳情
                                </button>
                            </div>
                            </div>
                        </div>


                        <!-- 資訊內容1 -->
                        <div class="modal fade" id="new1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">慶祝聖誕,來店消費送肉泥</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Scrollable modal -->
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        為了感謝您的支持，這個聖誕節帶著您的寶貝來店消費，即可免費獲得美味肉泥一份！😻🎅 
                                        讓您的毛孩也能一起享受節日的溫暖與快樂！🎀💖

                                        📍活動時間：即日起至 12/25
                                        📍數量有限，送完為止！
                                        
                                        快來和我們一起迎接聖誕驚喜吧！🎶🎄✨
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">回到資訊</button>
                                <button type="button" class="btn btn-primary">去預約賞貓</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 環境介紹 -->
                <div id="introduce" class="tab-pane fade">
                <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="d-flex py-2">    
                                <div class="card p-3  mx-2" style="width: 30rem;">
                                    <img src="{{asset('/images/envirment.svg')}}" class="card-img-top" alt="service">
                                    <div class="text-center fw-bold p-3 fs-5 text-red">位處寧靜悠閒地巷弄中</div>
                                </div>
                                <div class="card p-3  mx-2" style="width: 30rem;">
                                    <img src="{{asset('/images/envirment2.svg')}}" class="card-img-top" alt="service">
                                    <div class="text-center fw-bold p-3 fs-5 text-red">整體環境明亮、簡約設計</div>
                                </div>
                            </div>
                    </div>
                </div>
            
                <!-- 飼養方式 -->
                <div id="feeding" class="tab-pane fade">
                    <div class="d-flex justify-content-center">
                    <ul>
                        <li><strong>✅ 寬敞環境：</strong> 提供足夠活動空間，設有貓跳台、攀爬架與舒適休息區。</li>
                        <li><strong>✅ 優質飲食：</strong> 高蛋白貓糧＋鮮食（雞肉、鮭魚等），確保營養均衡。</li>
                        <li><strong>✅ 乾淨衛生：</strong> 每日清潔貓砂與食具，保持環境通風乾爽。</li>
                        <li><strong>✅ 定期健康管理：</strong> 施打疫苗、驅蟲、健康檢查，並進行遺傳疾病篩檢（HCM、PKD 等）。</li>
                        <li><strong>✅ 社會化培養：</strong> 從小與人互動，培養親人、不怕生的性格。</li>
                        <li><strong>✅ 運動與娛樂：</strong> 使用逗貓棒、智能玩具，維持活力與身心健康。</li>
                        <li><strong>🐱 用心照顧，讓貓咪們健康快樂成長！</li>
                    </ul>
                    </div>
                </div>
            </div>
        
        </div>
        <!--最新資訊內容-->
    </article>
     <!--訂閱喵嚕-->
     <article id="contact" class="py-7 bg-img  position-relative"
        style="background-image:url('{{ asset('images/contact.jpg') }}') ">
        <div class="container  position-relative py-7">
            <div class="d-flex align-items-center justify-content-between flex-md-row flex-column">

                <!--區塊標題-->
                <!--col-md設定為平板排版尺寸,col-xl為電腦排版尺寸,mb再分別設定不同尺寸的間隔距離-->
                <div class="col-5">
                        <div class="text-center">
                        <p class="h3 text-title">訂閱喵嚕</p>
                        <p class="fs-6 fw-bold text-white">將最快取得最新資訊</p>
                        </div>
                        <!--社群icon-->
                        
                        <div class="align-items-center d-flex">
                            <div class="d-flex text-start">
                                <a href="#" title="前往FB粉絲專業" class="p-3 fs-1"><span class="icon-facebook"></span></a>
                                <a href="#" title="前往IG頁面" class="p-3 pe-7 fs-1"><span class="icon-instagram"></span></a>
                            </div>
                            <div class="text-end">
                            <p class="text-white fw-bold fs-8 ps-2">想要預約看貓?<a href="/user/booking/booking" title="前往預約頁面">預約去</a></p>
                            </div>
                        </div>
                         <!--訂閱表單-->
                        <div class="">
                            <form>
                                <div class="mb-2 pb-3">
                                  <label for="customer" class="form-label fw-bold text-white fs-5">顧客名稱</label>
                                  <input type="text" class="form-control" id="contact-customer">
                                </div>
                                <div class="mb-2 pb-3">
                                    <label for="email1" class="form-label fw-bold text-white fs-5">聯絡信箱</label>
                                    <input type="email" class="form-control" id="contact-email">
                                </div>
                                <div class="mb-3 pb-3">
                                    <label for="textarea" class="form-label fw-bold text-white fs-5">有什麼想要告訴喵嚕?</label>
                                    <textarea class="form-control" id="contact-textarea" rows="3"></textarea>
                                  </div>
                                  <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-red me-2">重新填寫</button>
                                    <button type="submit" class="btn btn-red">送出</button>
                                </div>
                            </form>
                        </div>
                </div> 
            </div>
        </div>

        </article>
</main>
<script>
  document.addEventListener("DOMContentLoaded", function () { 
    let desktopLogo = document.getElementById("desktop-logo");

    if (desktopLogo) { 
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) { 
                desktopLogo.classList.add("logo-small");
                setTimeout(() => {
                    desktopLogo.src = "{{ asset('/images/hlogo.svg') }}";
                    desktopLogo.classList.remove("logo-small");
                }, 300);
            } else {
                desktopLogo.classList.add("logo-small");
                setTimeout(() => {
                    desktopLogo.src = "{{ asset('/images/圓logo.svg') }}";
                    desktopLogo.classList.remove("logo-small");
                }, 300);
            }
        });
    }
});





</script>
</body>
