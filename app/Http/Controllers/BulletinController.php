<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
