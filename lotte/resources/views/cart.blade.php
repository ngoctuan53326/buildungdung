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
                        <li>Giỏ hàng</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- cart-section -->

<div class="container">
    <div class="cart-content mt30 mb30">
        <div class="title-header mb20">
            <h2 class="title">Giỏ Hàng</h2>
            <p><span class="text-blue">{{isset($qty) ? $qty : 0}}</span> sản phẩm trong giỏ hàng của bạn</p>
        </div>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
                @php
                $totalPrice = 0; // Khai báo biến tổng tiền và gán giá trị ban đầu bằng 0
                @endphp
                @isset($cart)
                @foreach($cart->items as $id => $product)
                <tr>
                    <td>
                        <div class="product-title item-center">
                            <img src="/images/{{$product['item']->image}}" alt="">
                            <div>
                                <p>{{$product['name']}}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="item-center">{{$product['price']}}</div>
                    </td>
                    
                    <td>
                        <a href="{{ route('banhang.del1ToCart', $product['item']->id) }}" class="round-button">-</a>
							<input type="number" name="product_qty[{{ $product['item']->id }}]" step="1" min="0" value="{{ $product['qty'] }}" style="text-align: center;"readonly>
							<a href="{{ route('banhang.addToCart', $product['item']->id) }}" class="round-button">+</a>
                    </td>
                    <td>
                        <div class="item-center text-red">{{$product['qty'] * $product['price']}}</div>
                    </td>

                    <td class="product-remove">
                    <a href="{{route('banhang.xoagiohang', ['id' => $product['item']->id])}}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>

                    </td>
                    @php
                    $totalPrice += $product['qty'] * $product['price']; // Cộng dồn giá tiền vào biến tổng tiền
                    @endphp
                </tr>
                @endforeach

                @endisset
            </tbody>
        </table>
        <div class="prices-summary">
            <div class="left-content">
                <a href="product-list.html" class="derection-product text-blue"><i class="fas fa-long-arrow-alt-left"></i> Tiếp tục
                    mua hàng</a>
            </div>
            <div class="right-con">
                <div class="total-receipt">

                    <div class="prices-total pinside20">
                        <span class="price-text">Tổng cộng</span>
                        <span class="prices-value prices-final text-red">{{isset($totalPrice) ? $totalPrice : 0}}</span>
                    </div>
                </div>
                <a href="{{route('banhang.getdathang')}}" class="btn-default btn-checkout">Mua Hàng</a>
            </div>
        </div>
    </div>
</div>
<!-- /.cart-total -->
</div>

<!-- /.cart-section -->
@endsection
@section('js')
<script src="/js/jquery.min.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/menumaker.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery.sticky.js"></script>
<script type="text/javascript" src="/js/sticky-header.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/multiple-carousel.js"></script>

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
<style>
    .product-remove {
        width: 50px;
        /* Điều chỉnh chiều rộng của cột xóa theo ý muốn */
        display: flex;
        /* Sử dụng flexbox để căn giữa phần tử con */
        justify-content: center;
        /* Căn giữa theo chiều ngang */
        align-items: center;
        /* Căn giữa theo chiều dọc */
    }
</style>
@endsection