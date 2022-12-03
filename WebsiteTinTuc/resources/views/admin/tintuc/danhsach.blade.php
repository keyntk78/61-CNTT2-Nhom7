@extends('admin.layout.index')
@section('tittle')
    Danh sách tin tức
@endsection
@section('content')
<div class="main-content">
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ route('admin') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
                <span class="breadcrumb-item" >Danh sách</span>
                {{-- <span class="breadcrumb-item active">Basic Table</span> --}}
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
            <h4>Danh sách tin tức</h4>
            <div class="m-t-25">
                 <form action="" method="get" class="mb-3" >
                    <div class="row">
                        <div class="col-lg-3">
                            <select name="id_loaitin" class="form-control">
                                <option value="">-Chọn loại tin-</option>
                                @foreach (getAllLoaiTin() as $item)
                                        <option value="{{ $item->id }}" {{ request()->id_loaitin  == $item->id ? 'selected' : false }}>{{ $item->tenloaitin }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <input type="search" name="keywords" class="form-control" placeholder="Từ khóa tìm kiếm..." value="{{ request()->keywords }}">
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="m-t-25">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Hinh</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Tiêu đề không dấu</th>
                                <th scope="col">Nổi bật</th>
                                <th scope="col">Loại tin</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tintuc as $key => $item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td><img width="100px" src="{{ asset(PathImages($item->hinh)) }}"></td>
                                <td>{{$item->tieude}}</td>
                                <td>{{$item->tieudekhongdau}}</td>
                                <td>
                                    @if($item->noibat== 1)
                                        Có
                                    @else
                                        Không
                                    @endif
                                </td>
                                <td>{{$item->tenloaitin}}</td>
                                <td><a class="btn btn-primary" href="{{route('tintuc.sua',['id'=>$item->id])}}">Sửa</a></td>
                                <td><a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  href="{{route('tintuc.xoa',['id'=>$item->id])}}">Xóa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="apagination">
                    {{ $tintuc->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
