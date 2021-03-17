<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;

class ProgramController extends Controller{
    use \App\Traits\General; 
    public function index(){
        $data['title'] = "Program | Tangan Pengharapan";
        $data['subtitle'] = "List of Program";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Program', 'url' => 'program/create', 'icon' => 'fas fa-plus');
        $data['program'] = program::all();
        return view('program.index',$data);
    }

    public function create(){
        $data['title'] = "Program | Tangan Pengharapan";
        $data['action'] = "add";
        return view('program.action',$data);
    }

    public function store(Request $request){
        //
    }

    
    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Program | Tangan Pengharapan";
        $data['action'] = "edit";
        return view('program.action',$data);
    }

   
    public function update(Request $request, $id){
        //
    }

   
    public function destroy($id){
    }
}
