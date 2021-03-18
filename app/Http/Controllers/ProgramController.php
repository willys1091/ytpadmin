<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Session;
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
        $program = new program();
        $program->title = $request->title;
        $program->desc = htmlspecialchars($request->desc);
        $program->img = $request->newid.".".$request->imgext;
        $program->save();
        storage::disk('public3')->putFileAs('img/program/', asset('media/temp/program/img/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
        storage::disk('public2')->delete('media/temp/program/img/'.$request->imgfilename);
        session::flash('error','success');
        session::flash('message','Add Program Successfull');
        return redirect('program');
    }

    
    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Program | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = program::findorfail($id);
        return view('program.action',$data);
    }

   
    public function update(Request $request, $id){
        $program = program::findorfail($id);
        $program->title = $request->title;
        $program->desc = $request->desc;
        $request->userfile <> "" ?$program->img = $request->newid.".".$request->imgext:"";
        $program->save();
        if($request->userfile <> ""){
            storage::disk('public3')->putFileAs('img/program/', asset('media/temp/program/img/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
            storage::disk('public2')->delete('media/temp/program/img/'.$request->imgfilename);
        }
        session::flash('error','success');
        session::flash('message','Edit Program Successfull');
        return redirect('program');
    }

   
    public function destroy($id){
    }
}
