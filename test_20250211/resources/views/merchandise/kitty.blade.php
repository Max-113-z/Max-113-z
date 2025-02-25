<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.main')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

<h2 class="ms-3">小貓介紹</h2>

<!-- @include('component.social') -->
@include('component.errors')

<nav class="ms-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">喵咪介紹</a></li>
                      <li class="breadcrumb-item"><a href="#">小貓介紹</a></li>
                    </ol>
                </nav>

<div class="filter-area row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 g-4 mx-0">
    @foreach($merchandises as $merchandise)
    <div class="col text-center filtr-item py-3">
        <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
            <div class="position-relative">
                <img src="{{ asset($merchandise->photo ?? 'assets/images/default-merchandise.png') }}" 
                     class="card-img-top" 
                     alt="{{ $merchandise->name_en ?? 'No Name' }}" style="object-fit: cover; height: 250px;">
                <div class="card-body px-3 py-4">
                    <h4 class="card-title text-dark mb-2" style="font-weight: 600; font-size: 1.1rem;">{{ $merchandise->name_en ?? 'No Name' }}</h4>
                    <p class="card-text text-muted mb-3" style="font-size: 0.95rem;">{{ $merchandise->introduction ?? 'No Description Available' }}</p>
                    <a href="#" class="btn btn-primary btn-sm w-100">查看詳情</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection