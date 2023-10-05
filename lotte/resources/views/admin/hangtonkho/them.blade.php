@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Thêm hàng tồn kho</h1>
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
        <form action="{{route('admin.postHtkAdd')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="uname">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" placeholder="Tên sản phẩm" name="tensp"/>
            </div>
            <div class="form-group">
              <label for="">Loại sản phẩm</label>
              <input type="text" class="form-control" id="name" placeholder="loại sản phẩm" name="id_type"/>
            </div>
            <div class="form-group">
                <label for="uname">Số lượng</label>
                <input type="text" class="form-control" id="name" placeholder="Số lượng" name="soluong"/>
            </div>
            <div class="form-group">
                <label for="uname">Ngày nhập</label>
                <input type="date" class="form-control" id="name" placeholder="ngày nhập" name="ngaynhap"/>
            </div>
            <button type="submit" class="btn btn-primary">Thêm hàng tồn kho</button>
        </form>
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>