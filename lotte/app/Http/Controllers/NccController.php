<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nhacungcap;

class NccController extends Controller
{
    //
    public function getNccList(){
        $nhacungcaps=Nhacungcap::orderBy('created_at', 'desc')->get();
        return view('admin.nhacungcap.danhsach',compact('nhacungcaps'));
    }
    public function getNccAdd(){
        $nhacungcaps=Nhacungcap::all();
        return view('admin.nhacungcap.them',compact('nhacungcaps'));
    }
    public function postNccAdd(Request $request){
            $this->validate($request,
            [
                'tenncc'=>'required',
                'address'=>'required',
                'SDT'=>'required',
                'email'=>'required', 
            ],
            [
                'tenncc.required'=>'Bạn chưa nhập tên nhà cung cấp ',
                'address.required'=>'Bạn chưa nhập tên địa chỉ ',
                'SDT.required'=>'Bạn chưa nhập tên sdt ',
                'email.required'=>'Vui lòng nhập email'
                
            ]);
        $nhacungcaps=new Nhacungcap();
        $nhacungcaps->tenncc=$request->tenncc;
        $nhacungcaps->address=$request->address;
        $nhacungcaps->SDT=$request->SDT;
        $nhacungcaps->email=$request->email;
        $nhacungcaps->save();
        return redirect()->route('admin.getNccList')->with('success','Bạn đã thêm thành công!');  
    }
    public function getNccDelete(string $id){
        $nhacungcaps = Nhacungcap::find($id);
        $nhacungcaps->delete();
        return redirect()->route('admin.getNccList')->with('success','Bạn đã xóa thành công!');
    }
    public function getNccEdit(string $id){
        $nhacungcaps=Nhacungcap::where('id',$id)->get();
        $loaisp=Nhacungcap::all();
        return view('admin.nhacungcap.sua',array('nhacungcaps'=>$nhacungcaps),compact('loaisp'));
    }
    public function postNccEdit(Request $request, string $id){
            $this->validate($request,[
                'tenncc'=>'required',
                'address'=>'required',
                'SDT'=>'required',
                'email'=>'required', 
            ],
            [
                'tenncc.required'=>'Bạn chưa nhập tên nhà cung cấp ',
                'address.required'=>'Bạn chưa nhập tên địa chỉ ',
                'SDT.required'=>'Bạn chưa nhập tên sdt ',
                'email.required'=>'Vui lòng nhập email'
                
            ]);
        $nhacungcaps=Nhacungcap::find($id);
        $nhacungcaps->tenncc=$request->tenncc;
        $nhacungcaps->address=$request->address;
        $nhacungcaps->SDT=$request->SDT;
        $nhacungcaps->email=$request->email;
        $nhacungcaps->save();
        return redirect()->route('admin.getNccList')->with('success','Bạn đã sửa thành công!');  
    }
}