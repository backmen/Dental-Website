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
        return view('backend.site_config.create');
    }
}
