<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller{
    public function index(){
        $data['title'] = "Banner | Tangan Pengharapan";
        $data['subtitle'] = "List of Banner";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Chairity', 'url' => 'chairity/create', 'icon' => 'fas fa-plus');
        $data['chairity'] = chairity::all();
        return view('chairity.index',$data);
    }

    public function create(){
        
    }

    public function store(Request $request){
        
    }

    public function show($id){
        
    }

    public function edit($id){
    
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id)
    {
        //
    }
}
