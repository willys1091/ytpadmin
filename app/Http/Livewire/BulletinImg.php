<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\bulletin;


class BulletinImg extends Component{
    use WithFileUploads;

    public $action,$img,$imgfilename,$imgext,$doc,$docfilename,$docext,$newid;

    public function mount($action,$dataimg,$dataid){
        $this->newid = $action=='add'? bulletin::max('id') +1 : $dataid;
        $this->action = $action;
        $action=='edit'?$this->imgfilename = $dataimg:'';
    }

    public function updatedImg(){
        storage::disk('public2')->putFileAs('media/temp/bulletin/img', $this->img , str_replace(" ", "_", $this->img->getClientOriginalName()));
        $this->imgfilename = str_replace(" ", "_", $this->img->getClientOriginalName());
        $this->imgext = $this->img->extension();
        $this->emit('img',$this->imgfilename);
    }

    public function updatedDoc(){
        storage::disk('public2')->putFileAs('media/temp/bulletin/doc', $this->doc , str_replace(" ", "_", $this->doc->getClientOriginalName()));
        $this->docfilename = str_replace(" ", "_", $this->doc->getClientOriginalName());
        $this->docext = $this->doc->extension();
    }

    public function render(){
        return view('livewire.bulletin-img');
    }
}
