<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;
use Auth;

class AdminController extends Controller
{
    function getRegister(){
        return view('pages.register');
    }

    function postRegister(Request $req){
        $check = [
            'fullname'=>'required|max:50',
            'email'=>'required|max:50|email|unique:users',
            'username'=>'required|max:50|unique:users',
            'password'=>'required|min:6|max:20',
            'confirm_password'=>'required|same:password',
            'address'=>'required',
            'phone'=>'required|numeric'
        ];
        $mess = [
            'fullname.required'=>'Vui lòng nhập họ tên',
            'fullname.max'=>'Họ tên không quá :max kí tự',
            'password.min'=>'Password ít nhất :min kí tự',
            'email.unique'=>'Email đã có người sử dụng'
        ];
        $validator = Validator::make($req->all(),$check,$mess);

        if($validator->fails()) {
            return redirect()
                        ->route('dang_ki')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new User();
        $user->username = $req->username;
        $user->fullname = $req->fullname;
        $user->birthdate = date('Y-m-d',strtotime($req->birthdate));
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->role = 'user';
        $user->save();

        return redirect()->route('dang_nhap')->with([
            'success'=>'Đăng kí thành công'
        ]);
    }
    function getLogin(){
        return view('pages.login');
    }

    function postLogin(Request $req){

        ///validator

        Auth::attempt([
            'email'=>$req->email,
            'password'=>$req->password
        ]);
        if(Auth::check()) 
            return redirect()->route('trangchu');

        return redirect()->route('dang_nhap')->with([
            'error'=>'Sai thông tin đăng nhập'
        ]);
        
    }

    function getLogout(){
        Auth::logout();
        return redirect()->route('dang_nhap')->with([
            'success'=>'Đăng xuất thành công'
        ]);
    }

}
