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
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Điện thoại</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    <!-- product-list -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <!-- sidenav-section -->
                    <!-- <div id='cssmenu'>
                        <ul>
                            <li class='has-sub'><a href='#'>Hệ điều hành</a>
                                <ul>

                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả</span></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Android</span></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">ISO</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'>Hãng sản xuất</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Samsung</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Apple</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Xiaomi</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Vsmart</span>
                                        </label>
                                        </span>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">OPPO</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Vivo</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Nokia</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Huawei</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'>Giá Bán</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Dưới 2 triệu</span>
                                        </label>
                                    </li>
                                    <li><span>
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox-list">Từ 2 - 5 triệu</span>
                                            </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Từ 5 - 10 triệu</span>
                                        </label>
                                    </li>

                                    <li><span>
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox-list">Từ 10 - 15 triệu</span>
                                            </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Trên 15 triệu</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'>Màn hình</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Dưới 5.0 inch</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Trên 6.0 inch</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'>Bộ nhớ trong</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Dưới 32GB</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">64GB và 128GB</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">256GB và 512GB</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Trên 512GB</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div> -->
                    <!-- /.sidenav-section -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <!-- <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb10 alignright">
                            <form>
                                <div class="select-option form-group">
                                    <select name="select" class="form-control" placeholder="Sắp xếp theo">
                                        <option value="" default>Sắp xếp theo</option>
                                        <option value="">Bán Chạy</option>
                                        <option value="">Giá Thấp</option>
                                        <option value="">Giá Cao</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <div class="row">
                        <!-- product -->
                        @foreach($products as $typeproduct)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30">
                            <a href="product-single.html">
                                <div class="product-block">
                                <a href="{{ route('show', ['id' => $typeproduct->id]) }}"><div class="product-img"><img src="/images/{{ $typeproduct->image }} " alt=""></div></a>
                                    <div class="product-content">
                                        <h5><a href="{{ route('show', ['id' => $typeproduct->id]) }}" class="product-title">{{ $typeproduct->name }} <strong>(128GB,
                                                    Black)</strong></a></h5>
                                        <div class="product-meta"><a href="#" class="product-price">{{ $typeproduct->unit_price }} </a>
                                            <a href="#" class="discounted-price">{{ $typeproduct->promotion_price }} </a>
                                            <span class="offer-price">20%off</span>
                                        </div>
                                        <div class="shopping-btn">
                                        <a href="{{route('banhang.addToCart', $typeproduct->id)}}" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <!-- /.product -->
                    </div>
                    <div class="row">
                        <!-- pagination start -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="st-pagination">
                                <ul class="pagination">
                                    <li><a href="#" aria-label="previous"><i class="fa fa-angle-left" style="font-size: 16px;"></i></a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li> <a href="#" aria-label="Next"><i class="fa fa-angle-right" style="font-size: 16px;"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- pagination close -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.product-list -->
    @endsection


    @section('js')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                $('#cssmenu ul ul li:odd').addClass('odd');
                $('#cssmenu ul ul li:even').addClass('even');
                $('#cssmenu > ul > li > a').click(function () {
                    $('#cssmenu li').removeClass('active');
                    $(this).closest('li').addClass('active');
                    var checkElement = $(this).next();
                    if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                        $(this).closest('li').removeClass('active');
                        checkElement.slideUp('normal');
                    }
                    if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                        $('#cssmenu ul ul:visible').slideUp('normal');
                        checkElement.slideDown('normal');
                    }
                    if ($(this).closest('li').find('ul').children().length == 0) {
                        return true;
                    } else {
                        return false;
                    }
                });
            });
        })(jQuery);
    </script>
    @endsection