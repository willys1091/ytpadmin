<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Session;
use App\Models\about;

class AboutController extends Controller{
    public function index(){
        $data['title'] = "About | Tangan Pengharapan";
        $data['subtitle'] = "List of About";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add About', 'url' => 'about/create', 'icon' => 'fas fa-plus');
        $data['about'] = about::all();
        return view('about.index',$data);
    }

    public function create(){
        $data['title'] = "About | Tangan Pengharapan";
        $data['action'] = "add";
        return view('about.action',$data);
    }

    public function store(Request $request){
        $about = new about();
        $about->img = $request->newid.".".$request->imgext;
        $about->save();
        storage::disk('public3')->putFileAs('img/about/', asset('media/temp/about/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
        storage::disk('public2')->delete('media/temp/about/'.$request->imgfilename);
        session::flash('error','success');
        session::flash('message','Add About Successfull');
        return redirect('about');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "About | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = about::findorfail($id);
        return view('about.action',$data);
    }

    public function update(Request $request, $id){
        $about = about::findorfail($id);
        $about->img = $request->newid.".".$request->imgext;
        $about->save();
        if($request->userfile <> ""){
            storage::disk('public3')->putFileAs('img/about/', asset('media/temp/about/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
            storage::disk('public2')->delete('media/temp/about/'.$request->imgfilename);
        }
        session::flash('error','success');
        session::flash('message','Edit About Successfull');
        return redirect('about');
    }

    public function destroy($id){
    }
}
