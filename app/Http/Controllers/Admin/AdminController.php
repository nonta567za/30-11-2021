<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('admin.index',compact('menu'));
    }
}
