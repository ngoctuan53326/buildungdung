<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.getCateList') }}">Quản lý sản phẩm</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.getUserList') }}">Quản lý user</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.getTypeList') }}">Quản lý Type-Products</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.getNccList') }}">Quản lý Nhà cung cấp</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.getHdList') }}">Quản lý Bill</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.getHtkList') }}">Quản lý Hàng tồn kho</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" action="{{route('admin.postLogin')}}">
            @csrf
            <button class="btn btn-info" type="submit"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</button>
        </form>
    </div>
</nav>   