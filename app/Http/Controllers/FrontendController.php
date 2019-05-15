<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }
    public function myAccount($userId){
        return view('users/myAccount');
    }
}
