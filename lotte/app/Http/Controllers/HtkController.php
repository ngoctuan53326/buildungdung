<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Htk;

class HtkController extends Controller
{
    //
    public function getHtkList(){
        $Htks=Htk::orderBy('created_at', 'desc')->get();
        return view('admin.hangtonkho.danhsach',compact('Htks'));
    }
    public function getHtkAdd(){
        $Htks=Htk::all();
        return view('admin.hangtonkho.them',compact('Htks'));
    }
    public function postHtkAdd(Request $request){
            $this->validate($request,
            [
                'tensp' => 'required',
                'id_type' => 'required',
                'soluong' => 'required',
                'ngaynhap' => 'required',
            ], [
                'tensp.required' => 'Bạn chưa nhập sản phẩm',
                'id_type' => 'Chỉ chập nhận kiểu số',
                'soluong' => 'Chỉ nhập được số',
                'ngaynhap' => 'Chỉ nhập ngày',
            ]);
        $Htks=new Htk();
        $Htks->tensp=$request->tensp;
        $Htks->id_type=$request->id_type;
        $Htks->soluong=$request->soluong;
        $Htks->ngaynhap=$request->ngaynhap;
        $Htks->save();
        return redirect()->route('admin.getHtkList')->with('success','Bạn đã thêm thành công!');  
    }
    public function getHtkDelete(string $id){
        $Htks = Htk::find($id);
        $Htks->delete();
        return redirect()->route('admin.getHtkList')->with('success','Bạn đã xóa thành công!');
    }
    public function getHtkEdit(string $id){
        $Htks=Htk::where('id',$id)->get();
        $loaisp=Htk::all();
        return view('admin.hangtonkho.sua',array('Htks'=>$Htks),compact('loaisp'));
    }
    public function postHtkEdit(Request $request, string $id){
            $this->validate($request,[
                'tensp' => 'required',
                'id_type' => 'required',
                'soluong' => 'required',
                'ngaynhap' => 'required',
            ], [
                'tensp.required' => 'Bạn chưa nhập sản phẩm',
                'id_type' => 'Chỉ chập nhận kiểu số',
                'soluong' => 'Chỉ nhập được số',
                'ngaynhap' => 'Chỉ nhập ngày',
            ]);
        $Htks=Htk::find($id);
        $Htks->tensp=$request->tensp;
        $Htks->id_type=$request->id_type;
        $Htks->soluong=$request->soluong;
        $Htks->ngaynhap=$request->ngaynhap;
        $Htks->save();
        return redirect()->route('admin.getHtkList')->with('success','Bạn đã sửa thành công!');  
    }
}