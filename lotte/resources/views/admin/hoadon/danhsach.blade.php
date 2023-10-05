@extends('admin.category.layouts.master')
    @section('content1')
    <div>
        @if(session('success'))
            <br>
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <br>
        <div>
            <a href="{{route('admin.getHdAdd')}}">
                <button type="button" class="btn btn-outline-primary">Thêm mới</button>
            </a>
        </div>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên khách hàng</th>
                <th>Thành tiền</th>
                <th>Ngày</th>
                <th colspan='2'> <center>Cài đặt</center></th>
            </tr>
            </thead>
            <tbody>
                @isset($hoadons)
                    @php
                        $i=1;
                    @endphp
                    @foreach($hoadons as $hoadons)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$hoadons->tenkh}}</td>
                            <td>{{$hoadons->thanhtien}}</td>
                            <td>{{$hoadons->ngay}}</td>
                            <td>
                                <a href="{{route('admin.getHdEdit',[$hoadons->id])}}"><button class="btn btn-outline-primary"><i class="fas fa-cog  fa-lg"></i></button></a>
                            </td>
                            <td>
                                <form action="{{route('admin.getHdDelete',[$hoadons->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-primary" type="submit"><i class="fa fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $i=$i+1;
                        @endphp
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
    @endsection
