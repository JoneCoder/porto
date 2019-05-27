<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SocialLink;
use Carbon\Carbon;
use Image;
use Hash;
use Auth;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profileUpdate(Request $request, $profileId){
        $socialLinkCodeUser = User::find($profileId)->socialLinkCode;
        $socialLinkCode = SocialLink::where('socialLinkCode', $socialLinkCodeUser)->first('socialLinkCode');

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
        if ($request->hasFile('avatar')){
            $photo = $request->avatar;
            $fileExtension = $photo->getClientOriginalExtension();
            $fileName = 'avatar'.$profileId.'.'.$fileExtension;
            Image::make($photo)->resize(300, 300)->save(base_path('public/uploads/profilePic/'.$fileName), 100);
            User::find($profileId)->update([
                'avatar' => $fileName,
            ]);
        }
        return back();
    }
    public function changePass(Request $request){
        $currPass = $request->currPass;
        $newPass = $request->newPass;
        $authPass = Auth::User()->password;
        $request->validate([
            'currPass' => 'required',
            'newPass' => 'min:8|string|required',
            'confPass' => 'same:newPass|min:8|string|required',
        ]);
        if (Hash::check($currPass, $authPass)){
            User::find(Auth::id())->update([
                'password' => decrypt($newPass),
            ]);
        }
        else{
            return back()->with('passStatus', 'Current Password Does not match!');
        }
        return back()->with('status', 'Your profile password successfully changed!');
    }
}
