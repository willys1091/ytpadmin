<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bulletin;

class BulletinController extends Controller{
    public function index(){
        $data['title'] = "Bulletin | Tangan Pengharapan";
        $data['subtitle'] = "List of Bulletin";
        $data['bulletin'] = bulletin::all();
        return view('bulletin.index',$data);
    }

    public function create(){
        
    }

    public function store(Request $request){
        
    }

    public function show($id){
        
    }

    public function edit($id){
    
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id)
    {
        //
    }
}
