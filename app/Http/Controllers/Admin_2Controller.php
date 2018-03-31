<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Admin_2Controller extends Controller
{
    function getLogin(){
        return view('admin.login');
    }

    function postLogin(Request $req){
        $data = [
            'username'=>$req->username,
            'password'=>$req->password
        ];
        $check = Auth::guard('admin')->attempt($data);
        if($check) {
            echo "Login success";
            echo "<br>";
            echo Auth::guard('admin')->user()->fullname;
        }
        else{
            echo "Login fail";
        }
    }

    function getLogout(){
        Auth::guard('admin')->logout();
        echo "Logout success";
    }
}
