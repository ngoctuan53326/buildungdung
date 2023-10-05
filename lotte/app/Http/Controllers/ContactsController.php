<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Mail\ContactMail;
use App\Models\Lienhe;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //
    public function listLhAll()
    {
        $contacts = Customer::orderBy('created_at', 'desc')->get();
        return view('admin.contacts.danhsach', compact('contacts'));
    }
    public function getLhList(Request $request)
    {
        $status = $request->input('trangthai');

        $contactsstatus = Customer::where('trangthai', 'Like', '%' . $status . '%')->orderBy('updated_at', 'desc')->get();

        return view('admin.contacts.danhsach', compact('contactsstatus', 'status'));
    }

    public function updateLhStatus(Request $request, $id, $status)
    {
        $contacts = Customer::where('id', $id)->get();
        return view('admin.contacts.updatebill', array('contacts' => $contacts));
    }
    public function updateLhStatusAjax(Request $request, string $id)
    {
        $contacts = Customer::find($id);
        if ($request->has('trangthai')) {
            $contacts->trangthai = $request->trangthai;
        }
        $contacts->save();
        return redirect()->route('admin.listLhAll')->with('success', 'Bạn đã sửa thành công!');
    }
    public function cancelLh(string $id)
    {
        $contacts = Customer::findOrFail($id);

        $idcustomer = $contacts->id;

        $contactsdetail = Customer::where('id', $id)->get();

        $customer = Customer::find($id);

        foreach ($contactsdetail as $detail) {
            $detail->delete();
        }

        $customer->delete();

        $contacts->delete();

        return redirect()->route('admin.listLhAll')->with('success', 'Bạn đã xóa thành công!');
    }
    public function lienhe()
    {
        return view('contact-us');
    }
    public function postContact(Request $req)
    {
        // Xác thực dữ liệu từ form nếu cần

        // Lấy dữ liệu từ form
        $sentData = [
        'name' => $req->input('name'),
        'email' => $req->input('email'),
        'message' => $req->input('message'),
    ];
        // Gửi email cho bạn
        Mail::to('daytao0905@gmail.com')->send(new ContactMail($sentData));
        
        //
        

        $lienhe = new Lienhe();
        $lienhe->name = $req->name;
        $lienhe->email = $req->email;
        $lienhe->message = $req->message;
        $lienhe->save();


        // Chuyển hướng hoặc hiển thị thông báo thành công
        return redirect()->route('lienhe')->with('message', 'Gửi email thành công!');

    }
}
