<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller{
    public function index(){
        $data['title'] = "Event | Tangan Pengharapan";
        $data['subtitle'] = "List of Event";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Event', 'url' => 'event/create', 'icon' => 'fas fa-plus');
        $data['event'] = event::all();
        return view('event.index',$data);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
