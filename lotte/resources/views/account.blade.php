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
                        <li>Thông tin tài khoản</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- login-form -->

<div class="content">
    <div class="container">
        <div class="box">
            <div class="row-account">
                <div class="left-container">
                    <div class="user-infor">
                        <img src="images/user-img.png" alt="">
                        <span>NGUYEN DU KHANH</span>
                    </div>
                    <div class="side-bar-content">
                        <ul>
                            <a href="">
                                <li class="slide-bar active"><i class="fa fa-edit"></i><span>Thông tin tài khoản</span>
                                </li>
                            </a>
                            <a href="profile-receipt.html">
                                <li class="slide-bar"><i class="fas fa-money-check"></i><span>Quản lý đơn hàng</span>
                                </li>
                            </a>
                            <!-- <a href="address-deliver.html"><li class="slide-bar"><i class="fas fa-map-marker-alt"></i><span> Địa chỉ nhận hàng</span></li></a> -->
                            <a href="profile-reset-password.html">
                                <li class="slide-bar"><i class="fas fa-lock"></i><span> Đổi mật khẩu</span></li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="right-container">
                    <h3 class="title-content">Thông tin tài khoản</h3>
                    <div class="account-infor">
                        <form action="">
                            <div class="form-control">
                                <label for="" class="input-label">
                                    Họ & tên
                                </label>
                                <input type="text" placeholder="Thêm họ tên" class="input-field">
                            </div>
                            <div class="form-control">
                                <label for="" class="input-label">
                                    Email
                                </label>
                                <input type="email" placeholder="Thêm email" class="input-field">
                            </div>

                            <div class="form-control">
                                <label for="" class="input-label">
                                    Số điện thoại
                                </label>
                                <input type="phone" placeholder="Thêm số điện thoại" class="input-field">
                            </div>
                            <div class="form-control">
                                <label for="" class="input-label">
                                    Địa chỉ giao hàng
                                </label>
                                <input type="phone" placeholder="Địa chỉ" class="input-field">
                            </div>
                            <div class="form-control">
                                <label for="" class="input-label">
                                    Ngày sinh
                                </label>
                                <input type="date" placeholder="Thêm ngày sinh" class="input-field">
                            </div>

                            <div class="form-control">
                                <label for="" class="input-label">
                                    Giới tính
                                </label>

                                <input type="radio" name="gender" value="male" checked class="input-radio"> Nam
                                <input type="radio" name="gender" value="female" class="input-radio"> Nữ
                                <input type="radio" name="gender" value="other" class="input-radio"> Khác

                            </div>

                            <button class="btn-update">Cập nhật</button>
                        </form>
                    </div>
                </div>
                <!-- /.features -->
            </div>
        </div>
    </div>
</div>
<!-- /.login-form -->
@endsection


@section('js')
@endsection