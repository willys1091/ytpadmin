<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller{
    public function index(){
        $data['title'] = "Project | Tangan Pengharapan";
        $data['subtitle'] = "List of Project";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Project', 'url' => 'project/create', 'icon' => 'fas fa-plus');
        $data['project'] = project::all();
        return view('project.index',$data);
    }

    public function create(){
        $data['title'] = "Project | Tangan Pengharapan";
        $data['action'] = "add";
        return view('project.action',$data);
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        $data['title'] = "Project | Tangan Pengharapan";
        $data['action'] = "add";
        return view('project.action',$data);
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
