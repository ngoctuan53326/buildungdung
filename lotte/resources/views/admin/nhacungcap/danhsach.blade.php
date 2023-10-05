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
            <a href="{{route('admin.getNccAdd')}}">
                <button type="button" class="btn btn-outline-primary">Thêm mới</button>
            </a>
        </div>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên nhà cung cấp</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th colspan='2'> <center>Cài đặt</center></th>
            </tr>
            </thead>
            <tbody>
                @isset($nhacungcaps)
                    @php
                        $i=1;
                    @endphp
                    @foreach($nhacungcaps as $nhacungcaps)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$nhacungcaps->tenncc}}</td>
                            <td>{{$nhacungcaps->address}}</td>
                            <td>{{$nhacungcaps->SDT}}</td>
                            <td>{{$nhacungcaps->email}}</td>
                            <td>
                                <a href="{{route('admin.getNccEdit',[$nhacungcaps->id])}}"><button class="btn btn-outline-primary"><i class="fas fa-cog  fa-lg"></i></button></a>
                            </td>
                            <td>
                                <form action="{{route('admin.getNccDelete',[$nhacungcaps->id])}}" method="post">
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
