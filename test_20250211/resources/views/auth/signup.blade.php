<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.main') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')
@include('component.errors') 
<h1 class="text-center my-4">{{ $title }}</h1>

<form action="/user/auth/signup" method="post" class="container shadow-lg p-5 rounded bg-white">
    {{ csrf_field() }}
    
    <div class="mb-3">
        <label for="nickname" class="form-label">暱稱：</label>
        <input class="form-control" id="nickname" type="text" name="nickname" placeholder="請輸入暱稱" value="{{ old('nickname') }}">
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email：</label>
        <input class="form-control" id="email" type="email" name="email" placeholder="請輸入 Email" value="{{ old('email') }}">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">密碼：</label>
        <input class="form-control" id="password" type="password" name="password" placeholder="請輸入密碼">
        <div id="passwordHelp" class="form-text">
        </div>
    </div>

    <fieldset class="mb-3">
        <legend class="col-form-label">使用者類型：</legend>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="userType" value="G" @if (old('type') == 'G') checked @endif>
            <label class="form-check-label" for="userType">
                一般使用者
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="adminType" value="A" @if (old('type') == 'A') checked @endif>
            <label class="form-check-label" for="adminType">
                管理員
            </label>
        </div>
    </fieldset>

    <div class="d-flex justify-content-center">
        <button class="btn btn-primary px-5 py-2" type="submit">註冊</button>
    </div>
</form>


@endsection 
