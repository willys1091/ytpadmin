<div class="block block-rounded block-themed block-transparent mb-0">
    <div class="block-header bg-primary-dark">
        <h3 class="block-title">{{$title}}</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-times"></i></button>
        </div>
    </div>
    @if($action=='add')
        <form action="{{url('chairity')}}" method="post" onsubmit="submit.disabled = true; return true;" >
    @else
        <form action="{{url('chairity/'.$data->id)}}" method="post"> @method('patch')
    @endif @csrf
    <input type="hidden" class="action" value="{{$action}}"/>
    <div class="block-content font-size-sm">
        <div class="row ">
            <div class="form-group col-lg-12">
                <label for="Name">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$action=='edit'?$data->name:''}}" required>
            </div>
        </div>
        <div class="block-content block-content-full text-right border-top" >
            <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
            <button type="submit"  class="btn btn-primary">Save</button> 
        </div>
    </div>
    </form>
</div>