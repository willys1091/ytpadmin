<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChairityController extends Controller{
    public function index(){
        $data['title'] = "Chairity | Tangan Pengharapan";
        $data['subtitle'] = "List of Chairity";
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
