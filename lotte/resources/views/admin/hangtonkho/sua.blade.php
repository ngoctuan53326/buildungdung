@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Sửa hàng tồn kho</h1>
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
        <form action="{{route('admin.postHtkEdit',$Htks[0]->id)}}" method=   "post" enctype="multipart/form-data">
            @csrf
            @method('put') 
            <div class="form-group">
                <label for="uname">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" value="{{isset($Htks[0]->tensp)?$Htks[0]->tensp:''}}" name="tensp"/>
            </div>
            <div class="form-group">
                <label for="uname">Loại sản phẩm</label>
                <input type="text" class="form-control" id="name" value="{{isset($Htks[0]->id_type)?$Htks[0]->id_type:''}}" name="id_type"/>
            </div>
            <div class="form-group">
                <label for="uname">Số lượng</label>
                <input type="text" class="form-control" id="name" value="{{isset($Htks[0]->soluong)?$Htks[0]->soluong:''}}" name="soluong"/>
            </div>
            <div class="form-group">
                <label for="uname">Ngày nhập</label>
                <input type="date" class="form-control" id="name" value="{{isset($Htks[0]->ngaynhap)?$Htks[0]->ngaynhap:''}}" name="ngaynhap"/>
            </div>
            <button type="submit" class="btn btn-primary">Sửa Nhà cung cấp</button>
        </form>
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>