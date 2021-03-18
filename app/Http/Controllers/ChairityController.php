<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chairity;

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
        $data['title'] = "Chairity | Tangan Pengharapan";
        $data['action'] = "add";
        return view('chairity.action',$data);
    }

    public function store(Request $request){
        
    }

    public function show($id){
        
    }

    public function edit($id){
        $data['title'] = "Chairity | Tangan Pengharapan";
        $data['action'] = "edit";
        return view('chairity.action',$data);
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id)
    {
        //
    }
}
