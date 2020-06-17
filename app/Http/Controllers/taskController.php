<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskController extends Controller
{
   public function store(Request $request ){


    dd($request->all());

   }
}
