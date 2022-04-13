<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteContactController extends Controller
{
    public function index(){
        return view('site.contact.index');
    }
}
