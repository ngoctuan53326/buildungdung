@extends('admin.category.layouts.master')
@section('content1')

      <div class="container">
        <h1>Edit Banner</h1>

        <form action="{{ route('admin.postBannerEdit',$banner[0]->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <label for="">Link</label>
          <input type="text" name="link" id="" value="{{isset($banner[0]->link)?$banner[0]->link:''}}" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="">Tên</label>
          <input type="text" name="name" id="" value="{{isset($banner[0]->name)?$banner[0]->name:''}}" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="">Ưu đãi </label>
          <input type="text" name="uudai" id="" value="{{isset($banner[0]->uudai)?$banner[0]->uudai:''}}" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="">Giá</label>
          <input type="text" name="gia" id="" value="{{isset($banner[0]->gia)?$banner[0]->gia:''}}" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
              <label for="">Hình ảnh</label>
              <input type="file" class="form-control-file" name="image" id="" onchange="previewImage(this);" />
              Hình ảnh trước khi đổi: <img src="{{ asset('/images/'.$banner[0]->image) }}" width="200" height="100" class="img-thumbnail"/>  Hình ảnh sau khi đổi:<img id="preview"width="200" height="100" class="img-thumbnail"/>
            </div>
          </br></br><input name="editBtn" id="" class="btn btn-primary" type="submit" value="Sửa">
        </form> 
    </div>
@endsection
<script src="{{asset('source/assets/dest/js/preview-img.js')}}"></script>