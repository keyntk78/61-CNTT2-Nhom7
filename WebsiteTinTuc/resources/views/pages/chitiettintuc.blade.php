@extends('pages.layouts.index')
@section('tittle')
    Chi tiết tin tức
@endsection
@section('content')
@if(session('thongbao'))
<div class="alert alert-success">
        {{ session('thongbao') }}
    </div>
@endif

    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="{{ asset(PathImages($chitiettintuc->hinh)) }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-3">
                                <a href="">{{ $chitiettintuc->tenloaitin }}</a>
                                <span class="px-1">/</span>
                                <span>{{ format_date($chitiettintuc->created_at) }}</span>
                            </div>
                            <div>
                                <h1 class="mb-3">{{ $chitiettintuc->tieude }}</h1>
                                <b>
                                    <p>{{ $chitiettintuc->tomtat }}</p>
                                </b>

                            </div>
                            <div class="noidung">

                                {!! $chitiettintuc->noidung !!}

                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">{{ $soluongbinhluan }} bình luận</h3>
                        @foreach ($dsBinhLuan as $item)
                            <div class="media mb-4">
                                <img src="{{ asset(PathImages($item->avatar))}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href="">{{ $item->hoten }}</a> <small><i>{{ format_date($item->created_at) }}</i></small></h6>
                                    <p>{{ $item->noidung }}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <!-- Comment List End -->

                    @if (Auth::check())
                            <!-- Comment Form Start -->
                        <div class="bg-light mb-3" style="padding: 30px;">
                            <h3 class="mb-4">Viết bình luận</h3>
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="message">Bình luận *</label>
                                    <textarea id="message" cols="30" rows="5" name="binhluan" class="form-control"></textarea>
                                    @error('binhluan')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit"  value="Gửi bình luận"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                        <!-- Comment Form End -->
                    @endif


                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->


@endsection
