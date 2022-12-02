@extends('pages.layouts.index')
@section('tittle')
    Trang chủ
@endsection

@section('content')
@if(session('thongbao'))
<div class="alert alert-success">
        {{ session('thongbao') }}
    </div>
@endif
    <!-- Start: Phần Slider -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                {{-- Start: carousel --}}
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        @foreach ($noibat as $item)
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="{{ asset(PathImages($item->hinh)) }}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="{{ route('loaitin', ['id'=>$item->id_loaitin, 'tenkhongdau'=>$item->tenkhongdau]) }}">{{ $item->tenloaitin }}</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">{{ format_date($item->created_at) }}</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="{{ route('chitiettintuc', ['id'=>$item->id, 'tieudekhongdau'=>$item->tieudekhongdau]) }}">{{ $item->tieude }}</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                {{-- End: carousel --}}

                {{-- Start: Danh mục thể loại --}}
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Thể loại</h3>
                    </div>
                    @foreach ($list_4 as $item)
                            <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                                <img class="img-fluid w-100 h-100" src="{{ asset(PathImages($item->hinh)) }}" style="object-fit: cover;">
                                <a href="{{ route('thelloai', ['id'=>$item->id, 'tenkhongdau'=>$item->tenkhongdau]) }}" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                                    {{ $item->tentheloai }}
                                </a>
                            </div>
                    @endforeach
                </div>
                {{-- End: Danh mục thể loại --}}
            </div>
        </div>
    </div>
    <!-- End: Phần Slider  -->


    <!--Start: Tin tức theo danh mục thể loại -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                @foreach ($list_4 as $item)
                     <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">{{ $item->tentheloai }}</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @if (!empty(danhSachTinTheoTheLoai_4($item->id)))
                            @foreach (danhSachTinTheoTheLoai_4($item->id) as $list)
                                <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset(PathImages($list->hinh)) }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="{{ route('loaitin', ['id'=>$list->id_loaitin, 'tenkhongdau'=>$list->tenkhongdau]) }}">{{ $list->tenloaitin }}</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4 m-0" href="{{ route('chitiettintuc', ['id'=>$list->id, 'tieudekhongdau'=>$list->tieudekhongdau]) }}">{{ $list->tieude }}</a>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--End: Tin tức theo danh mục thể loại -->


    <!-- Start: Danh mục nổi bật và mới nhất -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">

                <!-- Start: Danh mục nổi bật -->
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Nổi bật</h3>
                            </div>
                        </div>
                        @foreach ($noibat as $item)
                             <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100 tc-noibat" src="{{ asset(PathImages($item->hinh)) }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light tc-noibat">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="{{ route('loaitin', ['id'=>$item->id_loaitin, 'tenkhongdau'=>$item->tenkhongdau]) }}">{{ $item->tenloaitin }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ format_date($item->created_at) }}</span>
                                    </div>
                                    <a class="h4" href="{{ route('chitiettintuc', ['id'=>$item->id, 'tieudekhongdau'=>$item->tieudekhongdau]) }}">{{ $item->tieude }}</a>
                                    <p class="m-0">{{ $item->tomtat }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End: Danh mục nổi bật -->

                <!-- Start: Danh mục mới nhất -->
                <div class="col-lg-4 pt-3 pt-lg-0">

                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid" src="{{ asset('img/news-500x280-4.jpg') }}" alt=""></a>
                    </div>
        
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Mới Nhất</h3>
                        </div>
                        @foreach ($moinhat as $item)
                            <div class="d-flex mb-3">
                            <img src="{{ asset(PathImages($item->hinh)) }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="{{ route('loaitin', ['id'=>$item->id_loaitin, 'tenkhongdau'=>$item->tenkhongdau]) }}">{{ $item->tenloaitin }}</a>
                                    <span class="px-1">/</span>
                                    <span>{{ format_date($item->created_at) }}</span>
                                </div>
                                <a class="h6 m-0" href="{{ route('chitiettintuc', ['id'=>$item->id, 'tieudekhongdau'=>$item->tieudekhongdau]) }}">{{ $item->tieude }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End: Danh mục mới nhất -->

            </div>
        </div>
    </div>
    </div>
    <!-- End: Danh mục nổi bật và mới nhất -->

@endsection
