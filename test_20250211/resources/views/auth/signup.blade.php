<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.main') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 
<h1>{{ $title }}</h1> 
@include('component.errors')

<form action="/user/auth/signup" method="post">
    {{ csrf_field() }}
    暱稱： <input class="form-control bg-light" type="text" name="nickname" 
            placeholder="暱稱" value="{{old('nickname')}}"><br>
    Email: <input class="form-control" type="text" name="email" 
            placeholder="Email" value="{{old('email')}}"><br>
    密碼： <input class="form-control" type="password" name="password" 
            placeholder="密碼" value="{{old('password')}}"><br>
    使用者類型：
    <input type="radio" name="type" value="G"
        @if (old("type")=="user" )
        checked
        @endif> 一般使用者
    <input type="radio" name="type" value='A'
        @if (old("type")=="admin" )
        checked
        @endif> 管理員<br>
    <input type="submit" value="註冊">
</form>

@endsection 
