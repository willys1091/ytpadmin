<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
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
        $chairity = new chairity();
        $chairity->name = $request->name;
        $chairity->save();
        session::flash('error','success');
        session::flash('message','Add Chairity Successfull');
        return redirect('chairity');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Chairity | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = chairity::findorfail($id);
        return view('chairity.action',$data);
    }

    public function update(Request $request, $id){
        $chairity = chairity::findorfail($id);
        $chairity->name = $request->name;
        $chairity->save();
        session::flash('error','success');
        session::flash('message','Edit Chairity Successfull');
        return redirect('chairity');
    }

    public function destroy($id){
    }
}
