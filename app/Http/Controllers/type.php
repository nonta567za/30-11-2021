<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class type extends Controller
{
    public function index(){
        return view('admin.type.index');
    }
}
