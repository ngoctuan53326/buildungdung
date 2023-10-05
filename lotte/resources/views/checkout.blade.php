@extends('layouts.master')

@section('css')
@endsection

@section('content')
<!-- /.page-header-->
<!-- checkout -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="box checkout-form">
                    <!-- checkout - form -->
                    <div class="box-head">
                        <h2 class="head-title">Thông tin của bạn</h2>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <form action="{{route('banhang.postdathang')}}" method="post" class="beta-form-checkout">
                                @csrf
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="ho"></label>
                                        <input name="ho" type="text" class="form-control" placeholder="Họ" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="name"></label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Tên" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="email">Email</label>
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Email address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="phone_number"></label>
                                        <input id="phone_number" name="phone_number" type="text" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>
                                        <input name="address" type="text" class="form-control" placeholder="Địa chỉ" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>
                                        <input name="gender" type="text" class="form-control" placeholder="Giới tính" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="note"></label>
                                        <textarea class="form-control" name="note" id="note" name="textarea" rows="4" placeholder="Ghi chú"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary ">Xác nhận thanh toán</button>
                                    <div class="checkbox alignright mt20">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span>Đăng kí tài khoản?</span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                            <!-- /.checkout-form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- product total -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box mb30">
                    <div class="box-head">
                        <h3 class="head-title">Đơn hàng của bạn</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <!-- product total -->

                            <div class="pay-amount ">
                                <table class="table mb20">
                                    <thead class="" style="border-bottom: 1px solid #e8ecf0;  text-transform: uppercase;">
                                        <tr>
                                            <th>
                                                <span>Sản phẩm</span>
                                            </th>
                                            <th>
                                                <span>Giá tiền</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cartItems as $item)
                                        <tr>
                                            <th><span>{{ $item['name'] }}</span></th>
                                            <td>${{ $item['price'] }}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <th><span>Tổng thanh toán</span></th>
                                            <td>${{ $totalPrice }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.product total -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
@endsection