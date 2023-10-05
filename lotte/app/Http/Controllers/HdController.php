<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hoadon;


class HdController extends Controller
{
    //
    public function getHdList(){
        $hoadons=Hoadon::orderBy('created_at', 'desc')->get();
        return view('admin.hoadon.danhsach',compact('hoadons'));
    }
    public function getHdAdd(){
        $hoadons=Hoadon::all();
        return view('admin.hoadon.them',compact('hoadons'));
    }
    public function postHdAdd(Request $request){
            $this->validate($request,[
                
                'tenkh'=>'required',
                'thanhtien'=>'required',
                'ngay'=>'required',
            ],[
                'tenkh.required'=>'Bạn chưa nhập tên khách hàng ',
                'thanhtien.required'=>'Bạn chưa nhập tổng thành tiền',
                'ngay.required'=>'Bạn chưa nhập ngày',
            ]);
        $hoadons=new Hoadon();
        $hoadons->tenkh=$request->tenkh;
        $hoadons->thanhtien=$request->thanhtien;
        $hoadons->ngay=$request->ngay;
        $hoadons->save();
        return redirect()->route('admin.getHdList')->with('success','Bạn đã thêm thành công!');  
    }
    public function getHdDelete(string $id){
        $hoadons = Hoadon::find($id);
        $hoadons->delete();
        return redirect()->route('admin.getHdList')->with('success','Bạn đã xóa thành công!');
    }
    public function getHdEdit(string $id){
        $hoadons=Hoadon::where('id',$id)->get();
        $loaisp=Hoadon::all();
        return view('admin.giohang.sua',array('hoadons'=>$hoadons),compact('loaisp'));
    }
    public function postHdEdit(Request $request, string $id){
            $this->validate($request,[
                
                'tenkh'=>'required',
                'thanhtien'=>'required',
                'ngay'=>'required',
            ],[
                'tenkh.required'=>'Bạn chưa nhập tên khách hàng ',
                'thanhtien.required'=>'Bạn chưa nhập tổng thành tiền',
                'ngay.required'=>'Bạn chưa nhập ngày',
            ]);
        $hoadons=Hoadon::find($id);
        $hoadons=new Hoadon();
        $hoadons->tenkh=$request->tenkh;
        $hoadons->thanhtien=$request->thanhtien;
        $hoadons->ngay=$request->ngay;
        $hoadons->save();
        return redirect()->route('admin.getHdList')->with('success','Bạn đã sửa thành công!');  
    }
}