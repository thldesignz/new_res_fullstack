<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialSetting;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function social(){
        $id = 1;
         $social_setting = SocialSetting::find($id);


        return view('admin/settings/social', [
            'social_setting' =>  $social_setting

        ]);
    }

    public function saveSocial(){
        $id = 1;
        request()->validate([
            'twitter_url' => [ 'string'],
            'instagram_url' => [ 'string'],
            'facebook_url' => ['string']
        ]);


         $social_setting = SocialSetting::find($id);
         $social_setting->twitter_url = request('twitter_url');
         $social_setting->facebook_url = request('facebook_url');
         $social_setting->instagram_url = request('instagram_url');
         $social_setting->save();
    

        return redirect('/admin/settings/social');

    }
}
