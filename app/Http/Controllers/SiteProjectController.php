<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteProjectController extends Controller
{
    public function index(){
        return view('site.project.index');
    }
}
