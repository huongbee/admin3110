<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getRegister(){
        return view('pages.register');
    }
}
