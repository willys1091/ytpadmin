<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventPreview extends Component{
    public $action,$dataimg,$url,$filenames;
    protected $listeners = ['img'];

    public function mount($action,$dataimg){
        $this->action = $action;
    }

    public function img($filename){
        $this->dispatchBrowserEvent('getimg',['filename'=>$filename]);
    }
    
    public function render(){
        return view('livewire.event-preview');
    }
}
