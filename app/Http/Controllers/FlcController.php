<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Session;
use App\Models\flc;

class FlcController extends Controller{
    public function index(){
        $data['title'] = "FLC | Tangan Pengharapan";
        $data['subtitle'] = "List of FLC";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add FLC', 'url' => 'flc/create', 'icon' => 'fas fa-plus');
        $data['flc'] = flc::all();
        return view('flc.index',$data);
    }

    public function create(){
        $data['title'] = "FLC | Tangan Pengharapan";
        $data['action'] = "add";
        return view('flc.action',$data);
    }

    public function store(Request $request){
        $flc = new flc();
        $flc->img = $request->newid.".".$request->imgext;
        $flc->save();
        storage::disk('public3')->putFileAs('img/flc/', asset('media/temp/flc/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
        storage::disk('public2')->delete('media/temp/flc/'.$request->imgfilename);
        session::flash('error','success');
        session::flash('message','Add FLC Successfull');
        return redirect('flc');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "FLC | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = flc::findorfail($id);
        return view('flc.action',$data);
    }

    public function update(Request $request, $id){
        $flc = flc::findorfail($id);
        $flc->img = $request->newid.".".$request->imgext;
        $flc->save();
        if($request->userfile <> ""){
            storage::disk('public3')->putFileAs('img/flc/', asset('media/temp/flc/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
            storage::disk('public2')->delete('media/temp/flc/'.$request->imgfilename);
        }
        session::flash('error','success');
        session::flash('message','Edit FLC Successfull');
        return redirect('flc');
    }

    public function destroy($id){
    }
}
