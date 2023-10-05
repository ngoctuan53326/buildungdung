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
                                <a href="account.html"><li class="slide-bar "><i class="fa fa-edit"></i><span>Thông tin tài khoản</span></li></a>
                                <a href=""><li class="slide-bar active"><i class="fas fa-money-check"></i><span>Quản lý đơn hàng</span></li></a>
                                <!-- <a href="address-deliver.html"><li class="slide-bar"><i class="fas fa-map-marker-alt"></i><span> Địa chỉ nhận hàng</span></li></a> -->
                                <a href="profile-reset-password.html"> <li class="slide-bar"><i class="fas fa-lock"></i><span> Đổi mật khẩu</span></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="right-container">
                        <h3 class="title-content">Đơn hàng đã đặt</h3>
                        <div class="receipt-infor">
                           
                            <table class="table table-hover">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Ngày đặt hàng</th>
                                    <th scope="col">Chi tiết đơn hàng</th>
                                     <th scope="col">Tình trạng đơn hàng</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">DH01</th>
                                    <td>Du Khánh</td>
                                    <td>10/10/2021</td>
                                    <td><a href="profile-receipt-details.html">Xem chi tiết</a></td>
                                    <td>Đang giao hàng</td>
                                  </tr>
                                  
                                </tbody>
                              </table>
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