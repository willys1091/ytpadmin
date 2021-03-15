<div class="block block-rounded block-themed block-transparent mb-0">
    <div class="block-header bg-primary-dark">
        <h3 class="block-title">{{$title}}</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-times"></i></button>
        </div>
    </div>
    @if($action=='add')
        <form action="{{url('bulletin')}}" method="post" onsubmit="submit.disabled = true; return true;" enctype="multipart/form-data">
    @else
        <form action="{{url('bulletin/'.$bulletin->id)}}" method="post" enctype="multipart/form-data"> @method('patch')
    @endif @csrf
    <input type="hidden" class="action" value="{{$action}}"/>
    <div class="block-content font-size-sm">
        @livewire('bulletin-img', ['action' => $action])
        <div class="block-content block-content-full text-right border-top" >
          
            <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
            <button type="submit"  class="btn btn-primary">Save</button> 
        </div>
    </div>
    </form>
</div>

<script>
    Livewire.restart();
</script>