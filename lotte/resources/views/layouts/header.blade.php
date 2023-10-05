 <!-- top-header-->
 <div class="top-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">
                 <p class="top-text">Flexible Delivery, Fast Delivery.</p>
             </div>
             <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                 <ul>
                     <li>+905513209</li>
                     <li>bintuan@gmail.com</li>
                 </ul>
             </div>
         </div>
         <!-- /.top-header-->f
     </div>
 </div>
 <!-- header-section-->
 <div class="header-wrapper">
     <div class="container">
         <div class="row">
             <!-- logo -->
             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                 <div class="logo">
                     <a href="{{route('tc')}}"><img src="images/Lotte_logo.png" alt=""> </a>
                 </div>
             </div>
             <!-- /.logo -->
             <!-- search -->
             <form action="{{ route('search') }}" method="GET">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="search-bg">
                         <input type="text" class="form-control" name='q' placeholder="Search Here">
                         <button type="Submit"><i class="fa fa-search"></i></button>
                     </div>
                 </div>
             </form>
             <!-- /.search -->
             <!-- account -->
             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                 <div class="account-section">
                     <ul>
                        <li><a href="{{route('admin.postLogin')}}" class="title hidden-xs">Đăng xuất</a></li>
                         <li><a href="{{route('admin.getLogin')}}" class="title hidden-xs">Đăng nhập</a></li>
                         <li><a href="/cart" class="title"><i class="fa fa-shopping-cart"></i> <sup class="cart-quantity">@if(Session::has('cart')){{Session('cart')->totalQty}}
                                     @else 0 @endif</sup></a>
                     </ul>
                 </div>
                 <!-- /.account -->
             </div>
             <!-- search -->
         </div>

     </div>
 </div>
 <div class="header-wrapper">
     <!-- navigation -->
     <div class="navigation">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <!-- navigations-->
                     <div id="navigation">
                         <ul>
                             <li class="active"><a href="/tc">Trang chủ</a></li>
                             <li><a href="">Đồ gia dụng</a>
                                 @if(Session::has('typeproduct'))
                                 @php
                                 $typeproduct = Session::get('typeproduct');
                                 @endphp
                                 <ul class="sub-menu">
                                     @foreach($typeproduct as $type)
                                     <li><a href="{{ route('producttype', $type->id) }}">{{$type->name }}</a></li>
                                     @endforeach
                                 </ul>
                                 @endif
                             </li>
                             <li><a href="/about">Thông tin</a>
                             <li><a href="/contact">Liên hệ</a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <!-- /.navigations-->
             </div>
         </div>
     </div>
 </div>
 <!-- /. header-section-->