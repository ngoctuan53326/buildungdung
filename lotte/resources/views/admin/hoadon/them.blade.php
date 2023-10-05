@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Thêm Giỏ Hàng</h1>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('admin.postGhAdd')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="uname">Tên khách hàng</label>
                <input type="text" class="form-control" id="name" placeholder="Tên khách hàng" name="tenkh"/>
            </div>
            <div class="form-group">
              <label for="">Tên Sản Phẩm </label>
              <input type="text" class="form-control" id="name" placeholder="Tên Sản Phẩm" name="tensanpham"/>
            </div>
            <div class="form-group">
                <label for="uname">Số lượng</label>
                <input type="text" class="form-control" id="name" placeholder="Số Lượng" name="soluong"/>
            </div>
            <div class="form-group">
              <label for="">Giá Tiền</label>
              <input type="text" class="form-control" id="name" placeholder="Giá Tiền" name="giatien"/>
            </div>
            
            <div class="form-group">
              <label for="">Hình ảnh</label>
              <input type="file" class="form-control-file" name="hinhanh" id="" onchange="previewImage(this);" />
              Hình ảnh trước khi đổi: <img src="{{ asset('/source/image/product/'.$giohangs[0]->hinhanh) }}" width="200" height="100" class="img-thumbnail"/>  Hình ảnh sau khi đổi:<img id="preview"width="200" height="100" class="img-thumbnail"/>
            </div>
            <button type="submit" class="btn btn-primary">Thêm giỏ hàng </button>
        </form>
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>