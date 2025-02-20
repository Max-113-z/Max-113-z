<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.main')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

<h1>{{ $title }}</h1>

<!-- @include('component.social') -->
@include('component.errors')
@foreach($merchandises as $merchandise)
<div class="filter-area">
        <div class="row row-cols-1 row-cols-md-2  row-cols-lg-3 row-cols-xxl-4 g-3 filter-box">
                <div class="col  filtr-item"  data-category="1">
                <img src="{{ asset($merchandise->photo ?? 'assets/images/default-merchandise.png') }}" class="card-img-top" />
                        <!-- <div class="card-body bg-silver-a position-absolute top-0 end-0 bottom-0 start-0
                        d-flex flex-column align-items-center justify-content-center"> -->
                        <h4 class="mb-1">{{ $merchandise->name }}</h4>
                        <p class="mb-1">{{ $merchandise->price }}</p>
                        <!-- </div> -->
                </div>
        </div>
</div>
    @endforeach
</ul>
@endsection