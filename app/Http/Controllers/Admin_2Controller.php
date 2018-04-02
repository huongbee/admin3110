<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Foods;
use Mail;

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

    function getSendMail(){
        $products = Foods::where([
            ['id','<=',5]
        ])->get();

        // to 1 persion
        //$emailReceiver = 'huongnguyenak96@gmail.com';

        // to multi persions
        $emailReceiver = [
            'huongnguyenak96@gmail.com',
            'nguyentruongconganh1997@gmail.com'
        ];

        Mail::send('pages.send_email', ['products' => $products], function ($message) use ($emailReceiver)
        {
            $message->from('huongnguyen08.cv@gmail.com', 'PHP 3110');
            $message->to($emailReceiver,'ngoc huong');
            $message->subject('Test Mail 2');
        });
        echo "success";
    }
}
