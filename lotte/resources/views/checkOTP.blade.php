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
            <img src="images/otp-icon.png" alt="">
            <h1 class="title">Nhập mã OTP</h1>
            <p>Mã OTP được gửi qua email</p>
            <form action="">
                <input type="email" class="field-email" placeholder="Nhập mã OTP">
                <button type="submit" class="submit-email mb20">Tiếp tục</button>
            </form>
            <a href="" class="text-blue">Gửi lại mã OTP</a>
        </div>
    </div>
    <!-- /.login-form -->
    @endsection


@section('js')
@endsection