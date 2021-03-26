<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        $data['title'] = "Partner | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = partner::findorfail($id);
        return view('partner.action',$data);
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
