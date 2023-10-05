@extends('layouts.master')

@section('css')
@endsection

@section('content')
<!-- page-header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="#">trang chủ</a></li>
                        <li>Lỗi 404</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- 404 error -->
<div class="space-medium">
    <div class="container">
        <div class="error-wrapper">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <h2>Chúng tôi không thể tìm thấy trang web</h2>
                    <p>Bạn không thể tìm thấy trang web. Có thể là bạn đã nhầm lẫn
                        hoặc chúng tôi đã chuyển hướng. Bạn có thể tìm kiếm phương hướng của mình ở thanh công cụ tìm
                        kiếm bên dưới.</p>
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12 mb30 ">
                            <div class="search-bg">
                                <input type="text" class="form-control" placeholder="Tìm kiêm ở đây">
                                <button type="Submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <h5>Hoặc</h5>
                    <a href="#" class="btn btn-primary btn-lg">Quay về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 404 error -->
@endsection


@section('js')
@endsection