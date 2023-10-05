@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Sửa hóa đơn</h1>
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
        @isset($giohangs) 
        <form action="{{route('admin.postHdEdit',$giohangs[0]->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put') 
            <div class="form-group">
                <label for="uname">Tên khách hàng</label>
                <input type="text" class="form-control" id="name" value="{{isset($giohangs[0]->tenkh)?$giohangs[0]->tenkh:''}}" name="tenkh"/>
            </div>
            <div class="form-group">
                <label for="uname">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" value="{{isset($giohangs[0]->tensanpham)?$giohangs[0]->tensanpham:''}}" name="tensanpham"/>
            </div>
            <div class="form-group">
                <label for="uname">Số lượng </label>
                <input type="text" class="form-control" id="name" value="{{isset($giohangs[0]->soluong)?$giohangs[0]->soluong:''}}" name="soluong"/>
            </div>
            <div class="form-group">
                <label for="uname">Giá Tiền</label>
                <input type="text" class="form-control" id="name" value="{{isset($giohangs[0]->giatien)?$giohangs[0]->giatien:''}}" name="giatien"/>
            </div>
            <button type="submit" class="btn btn-primary">Sửa hóa đơn</button>
        </form>
        @endisset
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>