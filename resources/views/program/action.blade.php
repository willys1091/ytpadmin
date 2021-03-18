<div class="block block-rounded block-themed block-transparent mb-0">
    <div class="block-header bg-primary-dark">
        <h3 class="block-title">{{$title}}</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-times"></i></button>
        </div>
    </div>
    @if($action=='add')
        <form action="{{url('program')}}" method="post" onsubmit="submit.disabled = true; return true;" >
    @else
        <form action="{{url('program/'.$data->id)}}" method="post"> @method('patch')
    @endif @csrf
    <input type="hidden" class="action" value="{{$action}}"/>
    <div class="block-content font-size-sm">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Name">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$action=='edit'?$data->title:''}}" required>
                </div>
                @livewire('program-img', ['action' => $action,'dataimg' =>$data->img??0,'dataid' =>$data->id??0])
            </div>
            
            @livewire('program-preview', ['action' => $action,'dataimg' =>$data->img??0,'dataid' =>$data->id??0])
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="Name">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="desc" rows="3" placeholder="Program Description..">{{$action=='edit'?$data->desc:''}}</textarea>
                </div>
            </div>
        </div>
     
        <div class="block-content block-content-full text-right border-top" >
            <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
            <button type="submit"  class="btn btn-primary">Save</button> 
        </div>
    </div>
    </form>
</div>

<script>Livewire.restart();</script>