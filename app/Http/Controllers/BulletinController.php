<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Session;
use App\Models\bulletin;

class BulletinController extends Controller{
    public function index(){
        $data['title'] = "Bulletin | Tangan Pengharapan";
        $data['subtitle'] = "List of Bulletin";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Bulletin', 'url' => 'bulletin/create', 'icon' => 'fas fa-plus');
        $data['bulletin'] = bulletin::all();
        return view('bulletin.index',$data);
    }

    public function create(){
        $data['title'] = "Bulletin | Tangan Pengharapan";
        $data['action'] = "add";
        return view('bulletin.action',$data);
    }

    public function store(Request $request){
        $bulletin = new bulletin();
        $bulletin->img = $request->newid.".".$request->imgext;
        $bulletin->url = $request->url;
        $bulletin->file = $request->newid.".".$request->docext;
        $bulletin->save();
        storage::disk('public3')->putFileAs('doc/buletin/', asset('media/temp/bulletin/doc/'.$request->docfilename) , $request->newid.'.'.$request->docext);
        storage::disk('public3')->putFileAs('img/buletin/', asset('media/temp/bulletin/img/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
        storage::disk('public2')->delete('media/temp/bulletin/doc/'.$request->docfilename);
        storage::disk('public2')->delete('media/temp/bulletin/img'.$request->imgfilename);
        session::flash('error','success');
        session::flash('message','Add Bulletin Successfull');
        return redirect('bulletin');

    }

    public function show($id){
        
    }

    public function edit($id){
        $data['title'] = "Bulletin | Tangan Pengharapan";
        $data['action'] = "edit";
        return view('bulletin.action',$data);
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id)
    {
        //
    }
}
