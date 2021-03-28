<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\admin;

class PeopleController extends Controller{
    public function index(){
        $data['title'] = "People | Tangan Pengharapan";
        $data['subtitle'] = "List of People";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add People', 'url' => 'people/create', 'icon' => 'fas fa-plus');
        $data['people'] = admin::all();
        return view('people.index',$data);
    }

    public function create(){
        $data['title'] = "People | Tangan Pengharapan";
        $data['action'] = "add";
        return view('people.action',$data); 
    }

    public function store(Request $request){
        $data = new admin;
        $data->email = $request->email;
        $data->name = $request->name;
        $data->password = md5($request->password);
        $data->active = '1';
        $data->save();
        session::flash('error','success');
        session::flash('message','Add People Successfull');
        return redirect('people');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "People | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = admin::findorfail($id);
        return view('people.action',$data); 
    }

    public function update(Request $request, $id){
        $data = admin::findorfail($id);
        $data->email = $request->email;
        $data->name = $request->name;
        $request->password<>''?$data->password = md5($request->password):'';
        $data->active = '1';
        $data->save();
        session::flash('error','success');
        session::flash('message','Edit People Successfull');
        return redirect('people');
    }
}
