@extends('layouts.master')

@section('css')
@endsection

@section('content')
<!-- slider -->
@if(session('success'))
    <br>
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
<div class="slider">
    <div class="owl-carousel owl-one owl-theme">
        @isset($banner)
        @foreach($banner as $banner)
        <div class="item">
            <div class="slider-img">
                <img src="images/{{ $banner->image }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                        <div class="slider-captions">
                            <div class="brand-img">
                                <img src="images/mi_logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endisset
    </div>
</div>
<!-- /.slider -->
<!-- mobile showcase -->
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="showcase-block">
                    <div class="display-logo ">
                        <a href="#"> <img src="images/nexus.png" alt=""></a>
                    </div>
                    <div class="showcase-img">
                        <a href="#"> <img src="images/display_img_1.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="showcase-block active">
                    <div class="display-logo alignleft">
                        <a href="#"> <img src="images/iphone.png" alt="">
                        </a>
                    </div>
                    <div class="showcase-img">
                        <a href="#"> <img src="images/display_img_2.png" alt="" style="padding-left: 80px;"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="showcase-block ">
                    <div class="display-logo ">
                        <a href="#"> <img src="images/samsung.png" alt="">
                        </a>
                    </div>
                    <div class="showcase-img">
                        <a href="#"><img src="images/display_img_3.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="showcase-block">
                    <div class="display-logo ">
                        <a href="#"><img src="images/htc.png" alt=""></a>
                    </div>
                    <div class="showcase-img">
                        <a href="#"><img src="images/display_img_4.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="showcase-block">
                    <div class="display-logo">
                        <a href="#"> <img src="images/alcatel.png" alt=""></a>
                    </div>
                    <div class="showcase-img">
                        <a href="#"> <img src="images/display_img_5.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="showcase-block">
                    <div class="display-logo ">
                        <a href="#"><img src="images/pixel.png" alt=""></a>
                    </div>
                    <div class="showcase-img">
                        <a href="#"> <img src="images/display_img_6.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="showcase-block">
                    <div class="display-logo ">
                        <a href="#"> <img src="images/vivo.png" alt=""></a>
                    </div>
                    <div class="showcase-img">
                        <a href="#"><img src="images/display_img_7.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.mobile showcase -->
<!-- latest products -->
@if(isset($results) && !$results->isEmpty())
<div class="container">
    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Kết quả tìm kiếm cho "{{ request('q') }}"</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <!-- product -->
                        @foreach($results as $product)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-block">
                                <div class="product-img">
                                    <a href="{{ route('show', ['id' => $product->id]) }}"><img src="/images/{{ $product->image }}" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <h5><a href="{{ route('show', ['id' => $product->id]) }}" class="product-title">{{ $product->name }}<strong>(128GB, Black)</strong></a></h5>
                                    <div class="product-meta">
                                        <a href="#" class="product-price">{{ $product->unit_price }}</a>
                                        <a href="#" class="discounted-price">{{ $product->promotion_price }}</a>
                                        <span class="offer-price">20%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="{{route('banhang.addToCart', $product->id)}}" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /.product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        @if(session('success'))
        <br>
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Sản phẩm mới nhất</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <!-- product -->
                        @isset($new_products)
                        @foreach($new_products as $new_product)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-block">
                                <div class="product-img">
                                    <a href="{{ route('show', ['id' => $new_product->id]) }}"><img src="/images/{{ $new_product->image }}" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <h5><a href="{{ route('show', ['id' => $new_product->id]) }}" class="product-title">{{ $new_product->name }}<strong>(128GB, Black)</strong></a></h5>
                                    <div class="product-meta">
                                        <a href="#" class="product-price">{{ $new_product->unit_price }}</a>
                                        <a href="#" class="discounted-price">{{ $new_product->promotion_price }}</a>
                                        <span class="offer-price">20%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="{{route('banhang.addToCart', $new_product->id)}}" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endisset
                        <!-- /.product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.latest products -->
<!-- seller products -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Bán chạy nhất</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="product-carousel">
        <div class="box-body">
            <div class="row">
                <div class="owl-carousel owl-two owl-theme">
                    <!-- product -->
                    @isset($recommended_products)
                    @foreach($recommended_products as $recommended_products)
                    <div class="item">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-block">
                                <div class="product-img"><a href="{{ route('show', ['id' => $recommended_products->id]) }}"><img src="/images/{{ $recommended_products->image }}" alt=""></div></a>
                                <div class="product-content">
                                    <h5><a href="{{ route('show', ['id' => $recommended_products->id]) }}" class="product-title">{{ $recommended_products->name }} <strong>(32 GB, Gold)</strong></a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">{{ $recommended_products->unit_price }}</a>
                                        <a href="#" class="discounted-price">{{ $recommended_products->promotion_price }}</a>
                                        <span class="offer-price">20%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="{{route('banhang.addToCart', $recommended_products->id)}}" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endisset
                    <!-- /.product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.seller products -->
<!-- featured products -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Đang khuyến mãi</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <!-- product -->
                        @isset($best_seller)
                        @foreach($best_seller as $best_seller)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-block">
                                <div class="product-img"><a href="{{ route('show', ['id' => $best_seller->id]) }}"><img src="/images/{{ $best_seller->image }}" alt=""></div></a>
                                <div class="product-content">
                                    <h5><a href="{{ route('show', ['id' => $best_seller->id]) }}" class="product-title">{{ $best_seller->name }}</a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">{{ $best_seller->unit_price }}</a>
                                        <a href="#" class="discounted-price"><strike>{{ $best_seller->promotion_price }}</strike></a>
                                        <span class="offer-price">40%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="{{route('banhang.addToCart', $best_seller->id)}}" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endisset
                        <!-- /.product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- /.featured products -->
<!-- cta -->
<!-- /.cta -->
<!-- features -->
<div class="bg-default pdt40 pdb40">
    <div class="container">
        <div class="row">
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Thanh toán an toàn</h3>
                        <p>Mang đến dịch vụ trải nghiệm thoải mái nhất, an toàn, tiện dụng, Mobistore! </p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Phản hồi 24/7</h3>
                        <p>Trợ giúp liên lạc, tham khảo , tra cứu 24/7!</p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left feature-circle">
                    <div class="feature-outline-icon">
                        <i class="fa fa-rotate-left "></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Đổi trả miễn phí</h3>
                        <p>Miễn phí bảo hành đổi trả lên đến 365 ngày!</p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Giá tốt nhất</h3>
                        <p>Giá thành tốt nhất trong thị trường. Cập nhật sản phẩm 24/7!</p>
                    </div>
                </div>
            </div>
            <!-- features -->
        </div>
    </div>
</div>
<!-- /.features -->
@endsection


@section('js')
@endsection