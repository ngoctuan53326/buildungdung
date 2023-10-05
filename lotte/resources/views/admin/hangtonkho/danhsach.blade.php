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
            <a href="{{route('admin.getHtkAdd')}}">
                <button type="button" class="btn btn-outline-primary">Thêm mới</button>
            </a>
        </div>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Số lượng</th>
                <th>Ngày nhập</th>
                <th colspan='2'> <center>Cài đặt</center></th>
            </tr>
            </thead>
            <tbody>
                @isset($Htks)
                    @php
                        $i=1;
                    @endphp
                    @foreach($Htks as $hangtonkhos)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$hangtonkhos->tensp}}</td>
                            <td>{{$hangtonkhos->id_type}}</td>
                            <td>{{$hangtonkhos->soluong}}</td>
                            <td>{{$hangtonkhos->ngaynhap}}</td>
                            <td>
                                <a href="{{route('admin.getHtkEdit',[$hangtonkhos->id])}}"><button class="btn btn-outline-primary"><i class="fas fa-cog  fa-lg"></i></button></a>
                            </td>
                            <td>
                                <form action="{{route('admin.getHtkDelete',[$hangtonkhos->id])}}" method="post">
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
