<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoSetting;

class SeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function seo(){
        $id = 1;
         $seo_setting = SeoSetting::find($id);


        return view('admin/settings/seo', [
            'seo_setting' =>  $seo_setting

        ]);
    }

    public function saveSeo(){
        $id = 1;
        request()->validate([
            'description' => ['required', 'string'],
            'keywords' => ['required', 'string']
        ]);


         $seo_setting = SeoSetting::find($id);
         $seo_setting->description = request('description');
         $seo_setting->keywords = request('keywords');
         $seo_setting->save();
    

        return redirect('/admin/settings/seo');

    }
}
