<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\partner;

class PostImg extends Component{
    use WithFileUploads;
    public $action,$img,$imgfilename,$imgext,$newid;

    public function mount($action,$dataimg,$dataid){
        $this->newid = $action=='add'? partner::max('id') +1 : $dataid;
        $this->action = $action;
        $action=='edit'?$this->imgfilename = $dataimg:'';
    }

    public function updatedImg(){
        storage::disk('public2')->putFileAs('media/temp/post/', $this->img , str_replace(" ", "_", $this->img->getClientOriginalName()));
        $this->imgfilename = str_replace(" ", "_", $this->img->getClientOriginalName());
        $this->imgext = $this->img->extension();
        $this->emit('img',$this->imgfilename);
    }

    public function render(){
        return view('livewire.post-img');
    }
}
