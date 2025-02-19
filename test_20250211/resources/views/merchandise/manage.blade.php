<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.master')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

<h1>{{ $title }}</h1>

<!-- @include('component.social') -->
@include('component.errors')
<ul class="list-group">
    @foreach($merchandises as $merchandise)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            <h4 class="mb-1">{{ $merchandise->name }}</h4>
            <img src="{{ asset($merchandise->photo ?? 'assets/images/default-merchandise.png') }}" />
            <p class="mb-1">{{ $merchandise->price }}</p>
            <a href="/merchandise/{{ $merchandise->id }}/edit" class="btn btn-primary btn-sm">編輯</a>
        </div>
        <form action="/merchandise/{{ $merchandise->id }}" method="post" class="d-inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger btn-sm">刪除</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection