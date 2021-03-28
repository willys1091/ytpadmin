<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\admin;
use App\Models\bulletin;
use App\Models\program;
use App\Models\chairity;
use App\Models\partner;
use App\Models\event;
use App\Models\flc;
use App\Models\postcategory;

class Active extends Component{
    public $status,$status2,$modul,$key;

    public function mount($status,$modul,$key){
        $this->status = $status;
        $this->modul = $modul;
        $this->key = $key;
    }

    public function change($status,$modul,$key){
        $status2 = $status=='0'?'1':'0';
        $this->status = $status2;
        if($modul == "admin"){
            $data = admin::findorfail($key);
        }elseif($modul == "bulletin"){
            $data = bulletin::findorfail($key);
        }elseif($modul == "program"){
            $data = program::findorfail($key);
        }elseif($modul == "chairity"){
            $data = chairity::findorfail($key);
        }elseif($modul == "postcategory"){
            $data = postcategory::findorfail($key);
        }elseif($modul == "partner"){
            $data = partner::findorfail($key);
        }elseif($modul == "event"){
            $data = event::findorfail($key);
        }elseif($modul == "flc"){
            $data = flc::findorfail($key);
        }
        $data->active = $status2;
        $data->save();
    }
    public function render(){
        return view('livewire.active');
    }
}
