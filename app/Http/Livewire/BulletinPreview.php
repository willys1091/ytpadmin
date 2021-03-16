<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BulletinPreview extends Component{
    public $action,$dataimg,$url,$filenames;

    protected $listeners = ['img'];

    public function mount($action,$dataimg,$dataurl){
        $this->action = $action;
        $this->url = $action=='add'?'':$dataurl<>'0'?$dataurl:'';
    }

    public function img($filename){
        $this->dispatchBrowserEvent('getimg',['filename'=>$filename]);
    }

    public function render(){
        return view('livewire.bulletin-preview');
    }
}
