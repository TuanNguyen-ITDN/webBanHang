<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function getLogin() {
    	return view('layout/pages/dangnhap');
    }
    public function postLogin(Request $request) {
    	$rules = [
    		'email' =>'required|email',
    		'password' => 'required|min:8'
    	];
    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
    		

            $credentials = array('email'=>$request->email, 'password'=>$request->password);
    		if( Auth::attempt($credentials)) {
    			return redirect()->back()->with(['flag'=>'success','message'=>'Dang nhap thanh cong']);
    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }



    public function getSignup(){
        return view('layout/pages/dangki');
    }


    public function postRegister(Request $req){
    $this->validate($req,
      [
        'email'=>'required|email|unique:users,email',//bat buoc nhap email va duoi email
        'password'=>'required|min:6|max:20',//nho nhat 6 ki ty va lon nhat la 20 ki tu
        'full_name'=>'required',//phai nhap
        're_password'=>'required|same:password'//password phai trung nhau
      ],
      [
        'email.required'=>'vui long nhap email',
        'email.email'=>'khong dung dinh dang email',
        'email.unique'=>'Email da co nguoi su dung',
        'password.required'=>'vui long nhap mat khau',
        're_password.same'=>'mat khau khong giong nhau',
        'password.min'=>'mat khau it nhat 6 ky tu'
      ]);
    $user = new user();
    $user->full_name = $req->email;
    $user->email = $req->email;
    $user->password = Hash::make($req->password);//hask ma hoa mat khau
    $user->phone = $req->phone;
    $user->address = $req->address;
    $user->save();
    return redirect()->back()->with('thongbao','Tao tai khoan thanh cong');
  }
}

 