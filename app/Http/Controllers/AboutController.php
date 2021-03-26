<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller{
    public function index(){
        $data['title'] = "About | Tangan Pengharapan";
        $data['subtitle'] = "List of About";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add About', 'url' => 'about/create', 'icon' => 'fas fa-plus');
        $data['about'] = about::all();
        return view('about.index',$data);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
