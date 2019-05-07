<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\user;
use Hash;
class LoginController extends Controller
{
    public function getLogin() {
    	return view('layout/pages/dangnhap');
    }
    // trang dangnhap
  public function postLogin(Request $req){
    $this->validate($req,
      [
        'email'=>'required|email',
        'password'=>'required|min:6|max:20',
      ],
      [
        'email.required'=>'Vui long nhap email',
        'email.email'=>'Email khong dung dinh dang',
        'password.required'=>'vui long nhap mat khau',
        'password.min'=>'Mat khau it nhat 6 ki tu',
        'password.max'=>'Mat khau khong qua 20 ky tu'

      ]
    );
    $credentials = array('email'=>$req->email, 'password'=>$req->password);
    if(Auth::attempt($credentials)){
      return redirect()->back()->with(['flag'=>'success','message'=>'Dang nhap thanh cong']);
    }
    else{
      return redirect()->back()->with(['flag'=>'danger','message'=>'Dang nhap khong thanh cong']);
    }
  }

  //dang xuat
  public function postLogout(){
    Auth::logout();
    return redirect()->route('trang-chu');
  }

















 public function getRegister(){
    return view('layout/pages/dangki');
}


public function postRegister(Request $request){

    $this->validate( $request,
      [
        'email'        =>'required|email|unique:users,email',//bat buoc nhap email va duoi email
        'full_name'    =>'required',//phai nhap
         
        'phone'        =>'required',
        'password'     =>'required|min:6|max:20',//nho nhat 6 ki ty va lon nhat la 20 ki tu
        're_password'  =>'required|same:password'//password phai trung nhau
    ],
    [
        'email.required'=>'Vui lòng nhập Email !',
        'email.email'=>'Email không đúng định dạng !',
        'email.unique'=>'Email đã có người sử dụng !',
        'password.required'=>'Vui lòng nhập mật khẩu !',
        're_password.same'=>'Mật khẩu không khớp !',
        'password.min'=>'Mật khẩu ít nhất 6 kí tự',
        'full_name.required'=>'Vui lòng nhập đầy đủ tên',
        'address.required'=>'Vui lòng nhập địa chỉ',
        'phone.required'=>'Vui lòng nhập số điện thoại',
    ]);

       $user = new user();
       $user->full_name = $request->full_name;
       $user->email = $request->email;
       $user->password =  Hash::make($request->password);
       $user->phone = $request->phone;
       $user->address = $request->address;
       $user->remember_token = 1;
       $user->save();
       return redirect()->back()->with('thanhcong','Tao tai khoan thanh cong');
}







}


