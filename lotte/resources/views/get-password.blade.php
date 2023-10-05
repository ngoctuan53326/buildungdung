@extends('layouts.master')

@section('css')
@endsection

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li>Quên mật khẩu</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- login-form -->

    <div class="content">
        <div class="forgot-container">
            <img src="images/get-password-icon.png" alt="">
            <h1 class="title">Nhập mật khẩu mới</h1>
            <form action="">
                <input type="password" class="field-email" placeholder="Nhập mật khẩu">
                <input type="password" class="field-email" placeholder="Nhập lại mật khẩu">
                <button type="submit" class="submit-email mb20">Lưu mật khẩu</button>
            </form>
            
        </div>
    </div>
    <!-- /.login-form -->
    @endsection


    @section('js')
    @endsection