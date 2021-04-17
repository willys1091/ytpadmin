<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\post;
use App\Models\postcategory;

class PostController extends Controller{
    public function index(){
        $data['title'] = "Post | Tangan Pengharapan";
        $data['subtitle'] = "List of Web postings";
        $data['contentHeader'] = "btn";
        $data['btn'] = array('title' => 'Add Post', 'url' => 'post/create', 'icon' => 'fas fa-plus');
        $data['post'] = post::all();
        return view('post.index',$data);
    }

    public function create(){
        $data['title'] = "New Post | Tangan Pengharapan";
        $data['action'] = "add";
        $data['postcategory'] = postcategory::where('active','1')->get();
        return view('post.action',$data);
    }

    public function store(Request $request){
        $post = new post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->modul = $request->modul;
        $post->img = $request->newid.".".$request->imgext;
        $post->save();
        storage::disk('public3')->putFileAs('img/post/', asset('media/temp/post/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
        storage::disk('public2')->delete('media/temp/post/'.$request->imgfilename);
        session::flash('error','success');
        session::flash('message','Add Post Successfull');
        return redirect('post');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Post | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = post::findorfail($id);
        return view('post.action',$data);
    }

    public function update(Request $request, $id){
        $chairity = chairity::findorfail($id);
        $chairity->name = $request->name;
        $chairity->save();
        session::flash('error','success');
        session::flash('message','Edit Post Successfull');
        return redirect('post');
    }

    public function destroy($id){
    }
}
