<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.main')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

<h2>成貓介紹</h2>

<!-- @include('component.social') -->
@include('component.errors')

<div class="filter-area row row-cols-4 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 g-4 mx-0">
    @foreach($merchandises as $merchandise)
    <div class="col text-center filtr-item py-3">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <img src="{{ asset($merchandise->photo ?? 'assets/images/default-merchandise.png') }}" 
                     class="card-img-top" 
                     alt="{{ $merchandise->name_en ?? 'No Name' }}">
                <div class="card-body text-center">
                    <h4 class="mb-1">{{ $merchandise->name_en ?? 'No Name' }}</h4>
                    <p class="mb-1">{{ $merchandise->introduction ?? 'No Description Available' }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection