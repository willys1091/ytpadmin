@extends('template')
@section('content')
<div class="content">
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            @if($action=='add')
                <form action="{{url('company')}}" method="post" onsubmit="submit.disabled = true; return true;" name="roleform">
            @else
                <form action="{{url('company/'.$data->id)}}" method="post" name="roleform"> @method('patch')
            @endif @csrf
            
            <div class="row">
               
                <div class="col-lg-6">
                    @livewire('company-logo', ['action' => $action, 'datalogo' =>$data->logo??0])
                    <div class="form-group">
                        <label for="Name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Company Name" value="{{$action=='edit'?$data->name:''}}" required>
                    </div>
                
                    <div class="form-group">
                        <label for="Title">Address <span class="text-danger">*</span></label>
                        <textarea class="js-maxlength form-control" name="address" rows="3" maxlength="1000" placeholder="Address" data-placement="right" data-always-show="true">{{$action=='edit'?$data->address:''}}</textarea>
                    </div>
                
                </div>

                <div class="col-lg-6">
                    @livewire('company-img', ['action' => $action, 'datalogo' =>$data->logo??0])
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">City <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="city" placeholder="City" value="{{$action=='edit'?$data->city:''}}" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">Country <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="country" placeholder="Country" value="{{$action=='edit'?$data->country:''}}" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">Postal Code <span class="text-danger">*</span></label>
                        <input type="text" class="js-masked-zip form-control" maxlength="6" name="postal" placeholder="postal Code" value="{{$action=='edit'?$data->postal:''}}" required>
                    </div>
                </div>
            </div>
                   
            <div class="row">       
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">Phone </label>
                        <input type="text" class="form-control numonly" maxlength="11" name="phone" placeholder="Phone" value="{{$action=='edit'?$data->phone:''}}">
                    </div>
                </div> 
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">Fax </label>
                        <input type="text" class="form-control numonly" maxlength="11" name="fax" placeholder="Fax" value="{{$action=='edit'?$data->fax:''}}">
                    </div>
                </div>  
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">Mobile Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control numonly" maxlength="13" name="mobile" placeholder="Mobile Phone" value="{{$action=='edit'?$data->mobile_phone:''}}" required>
                    </div>
                </div> 
            </div>
                    
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$action=='edit'?$data->email:''}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">Contact Person <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="cp" placeholder="Contact Person" value="{{$action=='edit'?$data->contact_person:''}}" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Name">Tax. No</label>
                        <input type="text" class="form-control js-masked-npwp" name="npwp" placeholder="Tax Number" value="{{$action=='edit'?$data->npwp:''}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-{{$action=='add' ? 'check' : 'Save'}}"></i> {{$action=='add' ? 'Create' : 'Save'}}</button>
                </div>
            </div>
        </div>     
        </form>
        </div>
    </div>
</div>
@endsection

@section ('headerScript')
    @livewireStyles
    <link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section ('footerScript')
    @livewireScripts
    <script src="{{asset('public/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('public/js/siapfulin.js')}}"></script>
    <script src="{{asset('public/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('public/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('public/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script>
        
        jQuery(function () {
            Siap.helpers([ 'flatpickr', 'maxlength','masked-inputs']);
        });
    </script>
@endsection