@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Thêm nhà cung cấp</h1>
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
        <form action="{{route('admin.postNccAdd')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="uname">Tên nhà cung cấp</label>
                <input type="text" class="form-control" id="name" placeholder="Tên nhà cung cấp" name="tenncc"/>
            </div>
            <div class="form-group">
              <label for="">Địa chỉ</label>
              <input type="text" class="form-control" id="name" placeholder="địa chỉ" name="address"/>
            </div>
            <div class="form-group">
                <label for="uname">số ĐT</label>
                <input type="text" class="form-control" id="name" placeholder="Số ĐT" name="SDT"/>
            </div>
            <div class="form-group">
                <label for="uname">Email</label>
                <input type="text" class="form-control" id="name" placeholder="email" name="email"/>
            </div>
            <button type="submit" class="btn btn-primary">Thêm nhà cung cấp</button>
        </form>
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>