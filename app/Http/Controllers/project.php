<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Session;
use App\Models\projects;

class project extends Controller{
    public function index(){
        $data['title'] = "Prohect | Tangan Pengharapan";
        $data['subtitle'] = "List of Project";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Project', 'url' => 'project/create', 'icon' => 'fas fa-plus');
        $data['project'] = project::all();
        return view('project.index',$data);
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
