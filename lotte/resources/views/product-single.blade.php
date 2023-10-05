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
                        <li>Chi tiết sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- product-single -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box">
                    <!-- product-description -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <img src="/images/{{$products[0]->image}} " alt="">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div id="slideshow"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="product-single">
                                    <h2><b>{{$products[0]->name}}</b></h2>
                                    <h2>{{$products[0]->description}}</h2>
                                    <div class="product-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                        <span class="text-secondary">&nbsp;(12 đánh giá)</span>
                                    </div>
                                    <p class="product-price" style="font-size: 25px;">{{$products[0]->unit_price}}<strike style="color:rgba(128, 128, 128, 0.658); font-size: 18px;">
                                    {{$products[0]->promotion_price}}</strike>
                                    </p>
                                    <div>
                                    <a href="{{route('banhang.addToCart', $products[0]->id)}}" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/menumaker.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/sticky-header.js"></script>
<script type="text/javascript" src="js/scrolling-nav.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.rateyo.min.js"></script>
<script src="js/jquery.desoslide.js"></script>

<script type="text/javascript">
    $('#slideshow').desoSlide({
        thumbs: $('ul.slideshow_thumbs li > a'),
        effect: {
            provider: 'animate',
            name: 'fade'
        }

    });
</script>

<script type="text/javascript">
    $(function() {
        $("#rateYo").rateYo({
            rating: 3.6,
            starWidth: "25px"
        });

    });
</script>

<script>
    function dcQuantity() {
        var result = document.getElementById('quantity-input');
        var qty = result.value;
        if (!isNaN(qty) && qty > 1) {
            result.value--;
            document.getElementById('quantity-input').innerHTML = qty;
        }
        return false;
    };

    function icQuantity() {
        var result = document.getElementById('quantity-input');
        var qty = result.value;
        if (!isNaN(qty) && qty < 10) {
            result.value++;
            document.getElementById('quantity-input').innerHTML = qty;
        }
        return false;
    }
</script>

<script>
    $(document).ready(function() {
        $('.less-evaluation').click(function() {
            $('.content-desc').css('height', '1180px');
            $(this).css('display', 'none');
            $('.more-evaluation').css('display', 'block');
        })
    })

    $(document).ready(function() {
        $('.more-evaluation').click(function() {
            $('.content-desc').css('height', 'auto');
            $(this).css('display', 'none');
            $('.less-evaluation').css('display', 'block');
        })
    })

    $(document).ready(function() {
        $('.page-scroll').click(function() {
            $('.page-scroll').removeClass('active');
            $(this).addClass('active');
        })
    })
</script>
@endsection