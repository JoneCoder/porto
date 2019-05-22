<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SocialLink;
use Carbon\Carbon;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profileUpdate(Request $request, $profileId){
        $socialLinkCodeUser = User::find($profileId)->socialLinkCode;
        $socialLinkCode = SocialLink::where('socialLinkCode', $socialLinkCodeUser)->first('socialLinkCode');

        if ($request->hasFile('avatar')){
            echo "kichu korba na";
        }
        if (!empty($socialLinkCode)){
            User::find($profileId)->update($request->except('_token', 'avatar', 'facebook', 'youtube', 'twitter', 'linkedin'));
            SocialLink::where('socialLinkCode', $socialLinkCodeUser)->update([
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,

            ]);
        }
        else{
            User::find($profileId)->update($request->except('_token', 'avatar', 'facebook', 'youtube', 'twitter', 'linkedin'));
            SocialLink::insert([
                'socialLinkCode' => $socialLinkCodeUser,
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'created_at' => Carbon::now(),

            ]);
        }
        return back();
    }
}
