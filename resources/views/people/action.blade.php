<div class="block block-rounded block-themed block-transparent mb-0">
    <div class="block-header bg-primary-dark">
        <h3 class="block-title">{{$title}}</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-times"></i></button>
        </div>
    </div>
    
    @if($action=='add')
        <form action="{{url('people')}}" method="post" onsubmit="submit.disabled = true; return true;">
    @else
        <form action="{{url('people/'.$data->id)}}" method="post"> @method('patch')
        <input type="hidden" name="id" value="{{$data->id}}"/>
    @endif @csrf
    <div class="block-content font-size-sm">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Name">Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$action=='edit'?$data->email:''}}" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$action=='edit'?$data->name:''}}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Password">Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
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
<script src="{{asset('js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('js/plugins/flatpickr/flatpickr.min.js')}}"></script>
<script>
   
    jQuery(function () {
        Siap.helpers(['flatpickr']);
    });
</script>
