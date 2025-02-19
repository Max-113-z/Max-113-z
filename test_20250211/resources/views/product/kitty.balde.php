<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.main')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

  <!-- 主要內容 -->
  <main>
    <article id="product-page" class="py-7">
      <div class="container">
        <!-- 區塊標題 -->
        <div class="text-center section-title mb-5">
          <h2>各類商品</h2>
          <p>個性化體驗服務</p>
        </div>
        <!-- 內容 -->
        <div>
          <!-- 分類按鈕 -->
          <ul class="list-unstyled d-flex align-items-center justify-content-center 
            filter-btn">
            <li class="btn btn-outline-dark me-2" data-filter="all"><span>全部</span></li>
            <li class="btn btn-outline-dark me-2" data-filter="1">運動型</li>
            <li class="btn btn-outline-dark me-2" data-filter="2">時尚型</li>
            <li class="btn btn-outline-dark me-2" data-filter="3">生活工作型</li>
            <li class="btn btn-outline-dark me-2" data-filter="4">兒童型</li>
          </ul>
          <!-- 分類商品 -->
          <div class="filter-area">
            <!-- 商品 -->
            <div class="row row-cols-1 row-cols-md-2  row-cols-lg-3 row-cols-xxl-4 g-3 filter-box">
              <!-- 1 -->
              <div class="col  filtr-item"  data-category="1">
                <a href="IMAGE/p1.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p1.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                    d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">運動型</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 2 -->
              <div class="col  filtr-item" data-category="2">
                <a href="IMAGE/p2.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p2.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                    d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">時尚型</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 3 -->
              <div class="col  filtr-item" data-category="3,1">
                <a href="IMAGE/p3.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p3.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                    d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">生活工作型</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 4 -->
              <div class="col  filtr-item" data-category="4">
                <a href="IMAGE/p4.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p4.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                    d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">兒童型</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 5 -->
              <div class="col  filtr-item" data-category="1">
                <a href="IMAGE/p1.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p1.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                    d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">運動型</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 6 -->
              <div class="col  filtr-item" data-category="4,2">
                <a href="IMAGE/p1.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p1.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                    d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">時尚型</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 7 -->
              <div class="col  filtr-item" data-category="3">
                <a href="IMAGE/p1.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p1.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                        d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">生活工作型</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 8 -->
              <div class="col  filtr-item" data-category="1,2">
                <a href="IMAGE/p1.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p1.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                    d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">分類名稱</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 9 -->
              <div class="col  filtr-item" data-category="1">
                <a href="IMAGE/p1.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p1.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                    d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">分類名稱</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- 10-->
              <div class="col  filtr-item" data-category="3,4">
                <a href="IMAGE/p1.jpg" title="點擊看大圖" data-fancybox="gallery" data-caption="商品名稱">
                  <div class="card border-0">
                    <img src="IMAGE/p1.jpg" class="card-img-top" alt="商品名稱">
                    <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                        d-flex flex-column align-items-center justify-content-center">
                      <h3 class="card-title h5 mb-4 lh-base">商品名稱</h3>
                      <i class="bi bi-zoom-in"></i>
                      <p class="card-text mt-4">分類名稱</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            </a>
          </div>
        </div>
      </div>
      </div>
      </div>
    </article>
  </main>