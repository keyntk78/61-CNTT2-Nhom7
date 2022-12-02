@extends('admin.layout.index')
@section('tittle')
    Thông tin
@endsection
@section('content')
              <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
                                {{-- <a class="breadcrumb-item" href="#">Danh sách</a> --}}
                                <span class="breadcrumb-item active">Thông tin người dùng</span>
                            </nav>
                        </div>
                    </div>
                       @if(session('thongbao'))
                           <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                    <div class="card">
                        <div class="card-body">
                            <h4>Thông tin người dùng</h4>
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Họ và tên</label>
                                        <input type="text" class="form-control" name="hoten" value="{{ old('hoten') ?? $chitietUser->hoten }}" placeholder="Nhập họ tên ...">
                                           @error('hoten')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" value="{{ old('email') ?? $chitietUser->email }}" name="email" placeholder="Nhập họ tên ..." disabled>
                                        @error('email')
                                                <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Avatar</label>
                                        <p><img width="200px" src="{{ asset(PathImages($chitietUser->avatar)) }}"></p>
                                        <input type="file" class="form-control" name="hinh" value="{{ old('hinh') }}">
                                           @error('hinh')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
    <!-- Content Wrapper END -->
@endsection
