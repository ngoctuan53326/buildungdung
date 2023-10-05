@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Sửa nhà cung cấp</h1>
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
        @isset($nhacungcaps) 
        <form action="{{route('admin.postNccEdit',$nhacungcaps[0]->id)}}" method=   "post" enctype="multipart/form-data">
            @csrf
            @method('put') 
            <div class="form-group">
                <label for="uname">Tên nhà cung cấp</label>
                <input type="text" class="form-control" id="name" value="{{isset($nhacungcaps[0]->tenncc)?$nhacungcaps[0]->tenncc:''}}" name="tenncc"/>
            </div>
            <div class="form-group">
                <label for="uname">Địa chỉ</label>
                <input type="text" class="form-control" id="name" value="{{isset($nhacungcaps[0]->address)?$nhacungcaps[0]->address:''}}" name="address"/>
            </div>
            <div class="form-group">
                <label for="uname">Email</label>
                <input type="text" class="form-control" id="name" value="{{isset($nhacungcaps[0]->email)?$nhacungcaps[0]->email:''}}" name="email"/>
            </div>
            <div class="form-group">
                <label for="uname">Số ĐT</label>
                <input type="text" class="form-control" id="name" value="{{isset($nhacungcaps[0]->SDT)?$nhacungcaps[0]->SDT:''}}" name="SDT"/>
            </div>
            <button type="submit" class="btn btn-primary">Sửa Nhà cung cấp</button>
        </form>
        @endisset
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>