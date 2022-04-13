<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteAboutController extends Controller
{
    public function index(){
        return view('site.about.index');
    }
}
