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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Enter Title Here" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <textarea class="js-summernote" name="content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-right border-top" >
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-primary">Save</button> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 order-xl-1">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><i class="fa fa-fw fa-boxes text-muted mr-1"></i> Moduls</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="form-group">
                        <select class="js-select2 form-control" name="modul" style="width: 100%;" data-placeholder="Choose one..">
                            <option></option>
                            @foreach($postcategory as $pc)
                                <option value="{{$pc->id}}">{{ucfirst($pc->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><i class="fa fa-fw fa-media text-muted mr-1"></i> Images</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    @livewire('post-img', ['action' => $action,'dataimg' =>$data->img??0,'dataid' =>$data->id??0])
                    @livewire('post-preview', ['action' => $action,'dataimg' =>$data->img??0,'dataid' =>$data->id??0])
                </div>
            </div>
        </div>
    </div>
    
</div>
</form>
        
 
@endsection

@section ('headerScript')
    @livewireStyles
    <link rel="stylesheet" href="{{asset('js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section ('footerScript')
    @livewireScripts
    <script src="{{asset('js/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('js/siapfulin.js')}}"></script>
    <script src="{{asset('js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script>
        
        jQuery(function () {
            Siap.helpers([ 'summernote','select2']);
        });
    </script>
@endsection