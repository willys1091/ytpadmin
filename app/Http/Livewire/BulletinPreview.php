<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BulletinPreview extends Component{
    public $action,$dataimg,$filenames;

    protected $listeners = ['img'];

    public function mount($action){
        $this->action = $action;
    }

    public function img($filename){
        $this->dispatchBrowserEvent('getimg',['filename'=>$filename]);
    }

    public function render(){
        return view('livewire.bulletin-preview');
    }
}
