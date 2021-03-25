<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\postcategory;

class PostCategoryController extends Controller{   
    public function index(){
        $data['title'] = "Post Category | Tangan Pengharapan";
        $data['subtitle'] = "List of Post Category";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Post Category', 'url' => 'postcategory/create', 'icon' => 'fas fa-plus');
        $data['postcat'] = postcategory::all();
        return view('postcategory.index',$data);
    }

    public function create(){
        $data['title'] = "Post Category | Tangan Pengharapan";
        $data['action'] = "add";
        return view('postcategory.action',$data);
    }

    public function store(Request $request){
        $cat = new postcategory();
        $cat->name = $request->name;
        $cat->save();
        session::flash('error','success');
        session::flash('message','Add Post Category Successfull');
        return redirect('postcategory');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Post Category | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = postcategory::findorfail($id);
        return view('postcategory.action',$data);
    }

    public function update(Request $request, $id){
        $cat = postcategory::findorfail($id);
        $cat->name = $request->name;
        $cat->save();
        session::flash('error','success');
        session::flash('message','Edit Post Category Successfull');
        return redirect('postcategory');
    }

    public function destroy($id){
    }
}
