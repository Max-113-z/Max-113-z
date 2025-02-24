<!-- 指定繼承 layout.main 母模板 --> 
@extends('layout.main') 
<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 
@include('component.errors')

<h1 class="text-center my-4">{{ $title }}</h1>

<form action="/booking/booking" method="post" class="container shadow-lg p-5 rounded bg-white">
    {{ csrf_field() }}
    
    <div class="mb-3">
        <label for="name" class="form-label">姓名：</label>
        <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="請輸入姓名">
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">郵件：</label>
        <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="請輸入郵件">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">電話：</label>
        <input class="form-control" id="phone" type="text" name="phone" value="{{ old('phone') }}" placeholder="請輸入電話">
    </div>

    <div class="mb-3">
        <label for="num_people" class="form-label">人數：</label>
        <input class="form-control" id="num_people" type="number" name="num_people" value="{{ old('num_people') }}" placeholder="請輸入人數">
    </div>

    <div class="mb-3">
        <label for="booking_time" class="form-label">預約時間：</label>
        <input class="form-control" id="booking_time" type="datetime-local" name="booking_time" value="{{ old('booking_time') }}">
    </div>

    <div class="d-flex justify-content-center mt-4">
        <button class="btn btn-primary px-5 py-2" type="submit">送出預約</button>
    </div>
</form>

@endsection