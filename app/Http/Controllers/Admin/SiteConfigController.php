<?php

namespace App\Http\Controllers\Admin;

use App\SiteConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteConfigController extends Controller
{
    public function index()
    {
        $siteConfig = SiteConfig::all();
        return view("backend.site_config.index",compact('siteConfig'));
    }

    public function create(){
        if (count(SiteConfig::all())){
            return redirect()->route('admin.site.config');
        }else{
            return view('backend.site_config.create');
        }
    }

    public function store(Request $request){
        $request->validate([
            'address' => 'required',
            'phone'   => 'required',
            'facebook' => 'required',
            'twitter'  => 'required',
            'instagram' => 'required',
            'pinterest' => 'required'
        ]);

        $siteConfig = new SiteConfig();
        $siteConfig->address = $request->address;
        $siteConfig->phone  =  $request->phone;
        $siteConfig->facebook = $request->facebook;
        $siteConfig->twitter = $request->twitter;
        $siteConfig->instagram  = $request->instagram;
        $siteConfig->pinterest = $request -> pinterest;
        $status = $siteConfig->save();
        if ($status){
            return redirect()->route('admin.site.config');
        }
    }


    public function update(Request $request){
        $siteConfig = SiteConfig::find($request->id);

        $siteConfig->{$request->field}= $request->value;
        $status = $siteConfig->save();
        if ($status){
            return "true";
        }else{
            return "false";
        }
    }
}
