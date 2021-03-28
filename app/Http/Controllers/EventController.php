<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Session;
use App\Models\event;

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
        $data['title'] = "Event | Tangan Pengharapan";
        $data['action'] = "add";
        return view('event.action',$data);
    }

    public function store(Request $request){
        $event = new event();
        $event->img = $request->newid.".".$request->imgext;
        $event->save();
        storage::disk('public3')->putFileAs('img/event/', asset('media/temp/event/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
        storage::disk('public2')->delete('media/temp/event/'.$request->imgfilename);
        session::flash('error','success');
        session::flash('message','Add Event Successfull');
        return redirect('event');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Event | Tangan Pengharapan";
        $data['action'] = "edit";
        $data['data'] = event::findorfail($id);
        return view('event.action',$data);
    }

    public function update(Request $request, $id){
        $event = event::findorfail($id);
        $event->img = $request->newid.".".$request->imgext;
        $event->save();
        if($request->userfile <> ""){
            storage::disk('public3')->putFileAs('img/event/', asset('media/temp/event/'.$request->imgfilename) , $request->newid.'.'.$request->imgext);
            storage::disk('public2')->delete('media/temp/event/'.$request->imgfilename);
        }
        session::flash('error','success');
        session::flash('message','Edit Event Successfull');
        return redirect('event');
    }

    public function destroy($id){
    }
}
