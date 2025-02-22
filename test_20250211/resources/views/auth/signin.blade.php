<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.main')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)
<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

<!-- @include('component.social') -->

@include('component.errors')
<article>
  <div class="container">
  <div class="card mb-3">
    <div class="row g-0">
      <!-- 圖片區塊 (圖片在左邊) -->
      <div class="col-md-5">
        <img class="rounded-start" style="width: 80%; height: auto; object-fit: cover;" src="{{ asset('/images/HANTER-22.jpg') }}" alt="圖片">
      </div>

      <!-- 登入表單區塊 (表單在右邊) -->
      <div class="col-md-7">
        <div class="card-body">
          <h2 class="card-title">會員登入</h2>
          <br>
          <form action="/user/auth/signin" method="post">
            {{ csrf_field() }}
            <div class="row g-3">
              <div class="col-12 mb-3">
                <label for="email" class="form-label">帳號</label>
                <input id="email" class="form-control bg-light" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
              </div>
              <div class="col-12">
                <label for="password" class="form-label">密碼</label>
                <input id="password" class="form-control bg-light" type="password" name="password" placeholder="密碼" value="{{ old('password') }}">
              </div>
              <div class="col-12">
                <input class="btn btn-dark px-4" type="submit" value="登入">
              </div>
            </div>
          </form>

          <!-- 立即註冊 -->
          <div class="d-flex mt-3">
            <a class="text-dark me-3" href="/user/auth/signup">帳號註冊</a>
          </div>

          <!-- 使用其他帳號登入 -->
          <p class="d-flex align-items-center justify-content-center mt-3">使用其他帳號登入</p>
          <ul class="list-unstyled d-flex align-items-center justify-content-center social-icon">
            <li class="me-3">
              <a class="text-dark display-6" href="/google/auth" target="_blank" title="前往google登入">
              <i class="bi bi-google"></i>
                <span class="d-none">google登入</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</article>


@endsection
