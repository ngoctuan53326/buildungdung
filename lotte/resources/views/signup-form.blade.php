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
                        <li>Đăng ký</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="box sing-form">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                    <!-- form -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                <h3 class="mb10">Tạo tài khoản</h3>
                                <p>Vui lòng điền đầy đủ các thông tin bên dưới</p>
                            </div>
                            <form action="{{route('postsignin')}}" method="post" class="beta-form-checkout">
                            @csrf
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="full_name">

                                        </label>
                                        <input id="full_name" name="full_name" type="text" class="form-control" placeholder="Họ và tên" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="phone"></label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Điện thoại" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="email"></label>
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label  sr-only" for="address"></label>
                                        <input id="address" name="address" type="text" class="form-control" placeholder="Địa chỉ" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label  sr-only" for="password"></label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Mật khẩu" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label  sr-only" for="re_password"></label>
                                        <input id="re_password" name="re_password" type="password" class="form-control" placeholder="Xác nhận mật khẩu" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <button type="submit" class="btn btn-primary btn-block mb10">Đăng Ký</button>
                                    <div>
                                        <p>Bạn đã có tài khoản?<a href="login-form.html"> Đăng Nhập</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.form -->
                    </div>
                </div>
                <!-- features -->
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <div class="box-body">
                        <div class="feature-left">
                            <div class="feature-icon">
                                <img src="images/feature_icon_1.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4>Mức độ uy tín!</h4>
                                <p>Được đánh giá an toàn, tin cậy hàng đầu Việt Nam với nhiều chính sách hỗ trợ chăm
                                    sóc khách hàng.</p>
                            </div>
                        </div>
                        <div class="feature-left">
                            <div class="feature-icon">
                                <img src="images/feature_icon_2.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4>Thanh toán tức thì!</h4>
                                <p>Thanh toán mọi nơi mọi lúc, giao dịch nhanh gọn, bảo đảm, an toàn, với liên kết
                                    90% ngân hàng, ví tiền, VISA trong toàn quốc!
                                </p>
                            </div>
                        </div>
                        <div class="feature-left">
                            <div class="feature-icon">
                                <img src="images/feature_icon_3.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4>Ưu đãi hấp dẫn!</h4>
                                <p>Với mong muốn làm hài lòng khách hàng, Mobistore luôn mang đến những ưu đãi cực
                                    kỳ tốt với chất lượng cao
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.features -->
            </div>
        </div>
    </div>
</div>
<!-- /.sign-up form -->
@endsection


@section('js')
@endsection