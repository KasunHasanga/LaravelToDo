<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexAbout(){
        return view('about');
    }

    public function indexContactus(){
        return view('contact');
    }


}
