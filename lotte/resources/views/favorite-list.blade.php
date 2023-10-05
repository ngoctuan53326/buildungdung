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
                            <li><a href="#">Trang chủ</a></li>
                            <li>Sản phẩm yêu thích</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- cart-section -->
    <!-- <div class="space-medium"> -->
    <div class="container">
        <div class="row">

            <div class="box">
                <div class="box-head box-head-gray">
                    <h3 class="head-title">Danh sách yêu thích</h3>
                </div>
                <div class="box-body box-body-gray">
                    <ul class="list-favorites">
                        <li class="item">
                            <button class="btn-delete">×</button>
                            <div class="thumbnail">
                                <a href="product-single.html" class="img">
                                    <img src="https://media3.scdn.vn/img4/2021/09_16/GGLGduTGmON5lp2Xmii5_simg_de2fe0_500x500_maxb.jpg"
                                        alt="">
                                </a>
                            </div>

                            <div class="body">
                                <a href="product-single.html" class="name">Điện Thoại iPhone 13 Pro Max 256GB - Hàng
                                    Chính Hãng</a>
                                <div class="rating-review">
                                    <div class="rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </div>
                                    <span class="review-count">(10 nhận xét)</span>
                                </div>

                            </div>

                            <div class="footer">
                                <div class="price-discount">36.990.00 đ</div>
                                <div class="wrap">
                                    <div class="price"><strike>37.990.000 đ</strike></div>
                                    <div class="discount">-3%</div>
                                </div>
                            </div>

                        </li>

                        <li class="item">
                            <button class="btn-delete">×</button>
                            <div class="thumbnail">
                                <a href="product-single.html" class="img">
                                    <img src="https://salt.tikicdn.com/cache/400x400/ts/product/81/73/6c/e3220a1f860b8611cfc0e7f78d515fbf.jpg.webp"
                                        alt="">
                                </a>
                            </div>

                            <div class="body">
                                <a href="product-single.html" class="name">Điện Thoại iPhone 13 Pro Max 256GB - Hàng
                                    Chính Hãng</a>
                                    <div class="rating-review">
                                        <div class="rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <span class="review-count">(10 nhận xét)</span>
                                    </div>
    
                            </div>

                            <div class="footer">
                                <div class="price-discount">36.990.000 đ</div>
                                <div class="wrap">
                                    <div class="price"><strike>37.990.00 đ</strike></div>
                                    <div class="discount">-3%</div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn-link" style="display:block; margin-bottom: 20px">
                <center> Trở về trang mua hàng</center>
            </a>

            <!-- cart-total -->

        </div>
        <!-- /.cart-total -->
        <!-- </div> -->
    </div>
    <!-- /.cart-section -->
    @endsection


@section('js')
@endsection