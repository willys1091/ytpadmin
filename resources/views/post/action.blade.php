@extends('template')
@section('content')
@if($action=='add')
    <form action="{{url('post')}}" method="post" onsubmit="submit.disabled = true; return true;" name="roleform">
@else
    <form action="{{url('post/'.$data->id)}}" method="post" name="roleform"> @method('patch')
@endif @csrf
<div class="content">
    <div class="row">
        <div class="col-xl-8 order-xl-0">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title " placeholder="Enter Title Here">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 order-xl-1">
            
            <div class="block block-rounded">
                <div class="block-content">
                    <ul class="nav nav-pills flex-column push">
                        <li class="nav-item mb-1">
                            <a class="nav-link active d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                Icons <span class="badge badge-pill badge-secondary ml-1">7k</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                Apps <span class="badge badge-pill badge-secondary ml-1">2k</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                Games <span class="badge badge-pill badge-secondary ml-1">3k</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                Graphics <span class="badge badge-pill badge-secondary ml-1">18k</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                Services <span class="badge badge-pill badge-secondary ml-1">2k</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                UI Kits <span class="badge badge-pill badge-secondary ml-1">12k</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                Themes <span class="badge badge-pill badge-secondary ml-1">6k</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
        
 
@endsection

@section ('headerScript')
    @livewireStyles
    <link rel="stylesheet" id="css-main" href="{{asset('js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section ('footerScript')
    @livewireScripts
    <script src="{{asset('js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('js/siapfulin.js')}}"></script>
    <script src="{{asset('js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script>
        
        jQuery(function () {
            Siap.helpers([ 'flatpickr', 'maxlength','masked-inputs']);
        });
    </script>
@endsection