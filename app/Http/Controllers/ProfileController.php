<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SocialLink;
use Illuminate\Support\Facades\Auth;


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
            if (SocialLink::where('socialLinkCode', User::find($profileId)->socialLinkCode)){
                User::find($profileId)->update($request->except('_token', 'avatar', 'facebook', 'youtube', 'twitter', 'linkedin'));
                SocialLink::where('socialLinkCode', User::find($profileId)->socialLinkCode)->update([
                    'facebook' => $request->facebook,
                    'youtube' => $request->youtube,
                    'twitter' => $request->twitter,
                    'linkedin' => $request->linkedin,

                ]);
            }
            else{
                SocialLink::insert([
                    'socialLinkCode' => User::find($profileId)->socialLinkCode,
                    'facebook' => $request->facebook,
                    'youtube' => $request->youtube,
                    'twitter' => $request->twitter,
                    'linkedin' => $request->linkedin,

                ]);
                User::find($profileId)->update($request->except('_token', 'avatar', 'facebook', 'youtube', 'twitter', 'linkedin'));
            }

        }
        return back();
    }
}
