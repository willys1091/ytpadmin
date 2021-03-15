<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;

class ProgramController extends Controller{
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
        return view('bulletin.action',$data);
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
