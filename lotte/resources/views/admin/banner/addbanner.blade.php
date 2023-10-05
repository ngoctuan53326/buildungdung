@extends('admin.category.layouts.master')
@section('content1')
    <br>
    <div class="container">
        <h1>Thêm Banner</h1>
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
        <form action="{{route('admin.postBannerAdd')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="uname">Link</label>
                <input type="text" class="form-control" id="link" placeholder="Link(có thể để trống)" name="link"/>
            </div>
            <div class="form-group">
                <label for="uname">Tên</label>
                <input type="text" class="form-control" id="name" placeholder="Tên" name="name"/>
            </div>
            
            <div class="form-group">
                <label for="uname">Ưu đãi</label>
                <input type="text" class="form-control" id="uudai" placeholder="Ưu đãi" name="uudai"/>
            </div>
            <div class="form-group">
                <label for="uname">Giá</label>
                <input type="text" class="form-control" id="gia" placeholder="Giá" name="gia"/>
            </div>
            <div class="form-group">
              <label for="">Hình ảnh</label>
              <input type="file" class="form-control-file" name="image" id="" onchange="previewImage(this);" />
              <img id="preview"width="200" height="100" class="img-thumbnail"/>
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>