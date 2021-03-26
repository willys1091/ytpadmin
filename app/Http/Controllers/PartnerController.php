<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Session;
use App\Models\partner;

class PartnerController extends Controller{
    public function index(){
        $data['title'] = "Partner | Tangan Pengharapan";
        $data['subtitle'] = "List of Partner";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Partner', 'url' => 'partner/create', 'icon' => 'fas fa-plus');
        $data['partner'] = partner::all();
        return view('partner.index',$data);
    }

    public function create(){
        $data['title'] = "Partner | Tangan Pengharapan";
        $data['action'] = "add";
        return view('partner.action',$data);
    }

    public function store(Request $request){
        $partner = new partner();
        $partner->img = $request->newid.".".$request->imgext;
        $partner->save();
        storage::disk('public3')->putFileAs('img/partner/', asset('media/temp/partner/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
        storage::disk('public2')->delete('media/temp/partner/'.$request->imgfilename);
        session::flash('error','success');
        session::flash('message','Add Partner Successfull');
        return redirect('partner');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Partner | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = partner::findorfail($id);
        return view('partner.action',$data);
    }

    public function update(Request $request, $id){
        $partner = partner::findorfail($id);
        $partner->img = $request->newid.".".$request->imgext;
        $partner->save();
        if($request->userfile <> ""){
            storage::disk('public3')->putFileAs('img/partner/', asset('media/temp/partner/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
            storage::disk('public2')->delete('media/temp/partner/'.$request->imgfilename);
        }
        session::flash('error','success');
        session::flash('message','Edit Partner Successfull');
        return redirect('partner');
    }

    public function destroy($id){
    }
}
