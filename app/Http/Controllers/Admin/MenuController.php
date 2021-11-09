<?php

namespace App\Http\Controllers\Admin;

use App\menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class MenuController extends Controller
{
    public function index(){
        return view ('admin.menu.index');
    }
    public function create(Request $request){
        //dd($request);
        $menu = new menu;
        $menu->text = $request->name;
        $menu->status = $request->status;
        $menu->id_user = $request->id_user;
        $menu->id_types = $request->id_types;
        
        
        if($request->hasFile('image')){
            $filemane = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filemane);
            Image::make(public_path().'/admin/images/'.$filemane);
            $menu->image = $filemane;
        }else{
            $menu->image = 'nopic.png';
        }
        $menu->save();
        return redirect('/admin/menu/index');
    }
}
