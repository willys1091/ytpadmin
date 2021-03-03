<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\country;
use App\Models\post_hdr;
use App\Models\post_category;
use File;
use Session;
class ContentController extends Controller{
    use \App\Traits\General; 
    public function index(){
        $data['title'] = "Content Video | Airvels";
        $data['subtitle'] = "List of Video";
        $data['contentHeader'] = "btn";
        $data['btn'] = array('title' => 'Add Content', 'url' => 'content/create', 'icon' => 'fas fa-plus');
        $data['content'] =Session('type')=='admin' ? post_hdr::all() : post_hdr::where('create_user',Session('id'))->get;
        return view('content.index',$data);
    }

    public function create(){
        $data['title'] = "Create Content Video | Airvels";
        $data['subtitle'] = "Create Video";
        $data['action'] = 'add';
        $data['category'] = post_category::all();
        $data['country'] = country::where('active','1')->get();
        return view('content.create',$data);

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
