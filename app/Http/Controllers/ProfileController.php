<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profileUpdate(Request $request, $profileId){
        if ($request->hasFile('avatar')){
            echo "kichu korba na";
        }
        else{
            User::find($profileId)->update($request->except('_token', 'avatar', 'facebook', 'youtube', 'twitter', 'linkedin'));
        }
        return back();
    }
}
