<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteServiceController extends Controller
{
    public function index(){
        return view('site.service.index');
    }
}
